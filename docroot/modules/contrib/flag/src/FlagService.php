<?php
/**
 * @file
 * Contains \Drupal\flag\FlagService.
 */

namespace Drupal\flag;


use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\flag\Event\FlagEvents;
use Drupal\flag\Event\FlaggingEvent;
use Drupal\flag\FlagType\FlagTypePluginManager;
use Drupal\user\Entity\User;
use Drupal\user\UserInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Flag service.
 *  - Handles search requests for flags and flaggings.
 *  - Performs flagging and unflaging operations.
 */
class FlagService implements FlagServiceInterface {

  /**
   * The flag type plugin manager injected into the service.
   *
   * @var FlagTypePluginManager
   */
  private $flagTypeManager;

  /**
   * The event dispatcher injected into the service.
   *
   * @var EventDispatcherInterface
   */
  private $eventDispatcher;

  /**
   * The entity query manager injected into the service.
   *
   * @var \Drupal\Core\Entity\Query\QueryFactory
   */
  private $entityQueryManager;

  /**
   * The current user injected into the service.
   *
   * @var AccountInterface
   */
  private $currentUser;

  /*
   * @var EntityTypeManagerInterface
   * */
  private $entityTypeManager;

  /**
   * Constructor.
   *
   * @param FlagTypePluginManager $flag_type
   *   The flag type plugin manager.
   * @param EventDispatcherInterface $event_dispatcher
   *   The event dispatcher service.
   * @param QueryFactory $entity_query
   *   The entity query factory.
   * @param AccountInterface $current_user
   *   The current user.
   * @param EntityTypeManagerInterface $entity_type_manager
   *   The entity manager.
   */
  public function __construct(FlagTypePluginManager $flag_type,
                              EventDispatcherInterface $event_dispatcher,
                              QueryFactory $entity_query,
                              AccountInterface $current_user,
                              EntityTypeManagerInterface $entity_type_manager) {
    $this->flagTypeManager = $flag_type;
    $this->eventDispatcher = $event_dispatcher;
    $this->entityQueryManager = $entity_query;
    $this->currentUser = $current_user;
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public function getFlags($entity_type = NULL, $bundle = NULL, AccountInterface $account = NULL) {
    $query = $this->entityQueryManager->get('flag');

    if ($entity_type != NULL) {
      $query->condition('entity_type', $entity_type);
    }

    $ids = $query->execute();
    $flags = $this->getFlagsByIds($ids);

    if (isset($bundle)) {
      $flags = array_filter($flags, function (FlagInterface $flag) use ($bundle) {
        $bundles = $flag->getApplicableBundles();
        return in_array($bundle, $bundles);
      });
    }

    if ($account == NULL) {
      return $flags;
    }

    $filtered_flags = [];
    foreach ($flags as $flag) {
      if ($flag->hasActionAccess('flag', $account) || $flag->hasActionAccess('unflag', $account)) {
        $filtered_flags[] = $flag;
      }
    }

    return $filtered_flags;
  }

  /**
   * {@inheritdoc}
   */
  public function getFlagging(FlagInterface $flag, EntityInterface $entity, AccountInterface $account = NULL) {
    if (empty($account)) {
      $account = $this->currentUser;
    }

    $flaggings = $this->getFlaggings($flag, $entity, $account);

    return !empty($flaggings) ? reset($flaggings) : NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function getFlaggings(FlagInterface $flag = NULL, EntityInterface $entity = NULL, AccountInterface $account = NULL) {
    $query = $this->entityQueryManager->get('flagging');

    // The user is supplied with a flag that is not global.
    if (!empty($account) && !empty($flag) && !$flag->isGlobal()) {
      $query->condition('uid', $account->id());
    }

    // The user is supplied but the flag is not.
    if (!empty($account) && empty($flag)) {
       $query->condition('uid', $account->id());
    }
    if (!empty($flag)) {
      $query->condition('flag_id', $flag->id());
    }

    if (!empty($entity)) {
      $query->condition('entity_type', $entity->getEntityTypeId())
                     ->condition('entity_id', $entity->id());
    }

    $ids = $query->execute();

    return $this->getFlaggingsByIds($ids);
  }

  /**
   * {@inheritdoc}
   */
  public function getFlagById($flag_id) {
    return $this->entityTypeManager->getStorage('flag')->load($flag_id);
  }

  /**
   * {@inheritdoc}
   */
  public function getFlaggableById(FlagInterface $flag, $entity_id) {
    return $this->entityTypeManager->getStorage($flag->getFlaggableEntityTypeId())->load($entity_id);
  }

  /**
   * {@inheritdoc}
   */
  public function getFlaggingUsers(EntityInterface $entity, FlagInterface $flag = NULL) {
    $query = $this->entityQueryManager->get('flagging')
      ->condition('entity_type', $entity->getEntityTypeId())
      ->condition('entity_id', $entity->id());

    if (!empty($flag)) {
      $query->condition('flag_id', $flag->id());
    }

    $ids = $query->execute();
    // Load the flaggings.
    $flaggings = $this->getFlaggingsByIds($ids);

    $user_ids = array();
    foreach ($flaggings as $flagging) {
      $user_ids[] = $flagging->get('uid')->first()->getValue()['target_id'];
    }

    return $this->entityTypeManager->getStorage('user')->loadMultiple($user_ids);
  }

  /**
   * {@inheritdoc}
   */
  public function flag(FlagInterface $flag, EntityInterface $entity, AccountInterface $account = NULL) {
    $bundles = $flag->getBundles();

    if (empty($account)) {
      $account = $this->currentUser;
    }

    // Check the entity type corresponds to the flag type.
    if ($flag->getFlaggableEntityTypeId() != $entity->getEntityTypeId()) {
      throw new \LogicException('The flag does not apply to entities of this type.');
    }

    // Check the bundle is allowed by the flag.
    if (!empty($bundles) && !in_array($entity->bundle(), $bundles)) {
      throw new \LogicException('The flag does not apply to the bundle of the entity.');
    }

    // Check whether there is an existing flagging for the combination of flag,
    // entity, and user.
    if ($this->getFlagging($flag, $entity, $account)) {
      throw new \LogicException('The user has already flagged the entity with the flag.');
    }

    $flagging = $this->entityTypeManager->getStorage('flagging')->create([
      'uid' => $account->id(),
      'flag_id' => $flag->id(),
      'entity_id' => $entity->id(),
      'entity_type' => $entity->getEntityTypeId(),
      'global' => $flag->isGlobal(),
    ]);

    $flagging->save();

    return $flagging;
  }

  /**
   * {@inheritdoc}
   */
  public function unflag(FlagInterface $flag, EntityInterface $entity, AccountInterface $account = NULL) {
    $bundles = $flag->getBundles();

    // Check the entity type corresponds to the flag type.
    if ($flag->getFlaggableEntityTypeId() != $entity->getEntityTypeId()) {
      throw new \LogicException('The flag does not apply to entities of this type.');
    }

    // Check the bundle is allowed by the flag.
    if (!empty($bundles) && !in_array($entity->bundle(), $bundles)) {
      throw new \LogicException('The flag does not apply to the bundle of the entity.');
    }

    $flagging = $this->getFlagging($flag, $entity, $account);

    // Check whether there is an existing flagging for the combination of flag,
    // entity, and user.
    if (!$flagging) {
      throw new \LogicException('The entity is not flagged by the user.');
    }

    $flagging->delete();
  }

  /**
   * {@inheritdoc}
   */
  public function unflagAll(EntityInterface $entity = NULL, AccountInterface $account = NULL) {
    $flaggings = $this->getFlaggings(NULL, $entity, $account);

    $this->entityTypeManager->getStorage('flagging')->delete($flaggings);
  }

  /**
   * {@inheritdoc}
   */
  public function userFlagRemoval(UserInterface $account) {
    // Remove flags by this user.
    $this->unflagAll(NULL, $account);

    // Remove flags that have been done to this user.
    $this->unflagAll($account);
  }

  /**
   * Loads flag entities given their IDs.
   *
   * @param int[] $ids
   *   The flag IDs.
   *
   * @return \Drupal\flag\FlagInterface[]
   *   An array of flags.
   */
  protected function getFlagsByIds(array $ids) {
    return $this->entityTypeManager->getStorage('flag')->loadMultiple($ids);
  }

  /**
   * Loads flagging entities given their IDs.
   *
   * @param int[] $ids
   *   The flagging IDs.
   *
   * @return \Drupal\flag\FlaggingInterface[]
   *   An array of flaggings.
   */
  protected function getFlaggingsByIds(array $ids) {
    return $this->entityTypeManager->getStorage('flagging')->loadMultiple($ids);
  }

}
