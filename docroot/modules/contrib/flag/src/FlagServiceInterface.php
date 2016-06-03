<?php
/**
 * @file
 * Contains \Drupal\flag\FlagServiceInterface.
 */

namespace Drupal\flag;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\user\UserInterface;

/**
 * Flag service interface.
 */
interface FlagServiceInterface {

  /**
   * List all flags available.
   *
   * For example to list all flags operating on articles:
   *
   * @code
   *   $this->flagService->getFlags('node', 'article');
   * @endcode
   *
   * If all the parameters are omitted, a list of all flags will be returned.
   *
   * @param string $entity_type
   *   (optional) The type of entity for which to load the flags.
   * @param string $bundle
   *   (optional) The bundle for which to load the flags.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   (optional) The user account to filter available flags. If not set, all
   *   flags for the given entity and bundle will be returned.
   *
   * @return array
   *   An array of flag entities, keyed by the entity IDs.
   */
  public function getFlags($entity_type = NULL, $bundle = NULL, AccountInterface $account = NULL);

  /**
   * Get a single flagging for given a flag and  entity.
   *
   * Use this method to check if a given entity is flagged or not.
   *
   * For example, to get a bookmark flagging for a node:
   *
   * @code
   *   $flag = \Drupal::service('flag')->getFlagById('bookmark');
   *   $node = Node::load($node_id);
   *   $flagging = \Drupal::service('flag')->getFlagging($flag, $node);
   * @endcode
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The flaggable entity.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   (optional) The account of the flagging user. If omitted, the flagging for
   *   the current user will be returned.
   *
   * @return \Drupal\flag\FlaggingInterface|null
   *   The flagging or NULL if the flagging is not found.
   *
   * @see \Drupal\flag\FlagServiceInterface::getFlaggings()
   */
  public function getFlagging(FlagInterface $flag, EntityInterface $entity, AccountInterface $account = NULL);

  /**
   * Get all flaggings for the given entity, flag, and optionally, user.
   *
   * This method works very much like FlagServiceInterface::getFlagging() only
   * it returns all flaggings matching the given parameters.
   *
   * @code
   *   $flag = \Drupal::service('flag')->getFlagById('bookmark');
   *   $node = Node::load($node_id);
   *   $flaggings = \Drupal::service('flag')->getFlaggings($flag, $node);
   *
   *   foreach ($flaggings as $flagging) {
   *     // Do something with each flagging.
   *   }
   * @endcode
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   (optional) The flag entity. If NULL, flaggings for any flag will be
   *   returned.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   (optional) The flaggable entity. If NULL, flaggings for any entity will
   *   be returned.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   (optional) The account of the flagging user. If NULL, flaggings for any
   *   user will be returned.
   *
   * @return array
   *   An array of flaggings.
   */
  public function getFlaggings(FlagInterface $flag = NULL, EntityInterface $entity = NULL, AccountInterface $account = NULL);

  /**
   * Load the flag entity given the ID.
   *
   * @code
   *   $flag = \Drupal::service('flag')->getFlagById('bookmark');
   * @endcode
   *
   * @param int $flag_id
   *   The ID of the flag to load.
   *
   * @return \Drupal\flag\FlagInterface|null
   *   The flag entity.
   */
  public function getFlagById($flag_id);

  /**
   * Loads the flaggable entity given the flag entity and entity ID.
   *
   * @code
   *   $flag = \Drupal::service('flag')->getFlagById('bookmark');
   *   $flaggable = \Drupal::service('flag')->getFlaggableById($flag, $entity_id);
   * @endcode
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag entity.
   * @param int $entity_id
   *   The ID of the flaggable entity.
   *
   * @return \Drupal\Core\Entity\EntityInterface|null
   *   The flaggable entity object.
   */
  public function getFlaggableById(FlagInterface $flag, $entity_id);

  /**
   * Get a list of users that have flagged an entity.
   *
   * @code
   *   $flag = \Drupal::service('flag')->getFlagById('bookmark');
   *   $node = Node::load($node_id);
   *   $flagging_users = \Drupal::service('flag')->getFlaggingUsers($node, $flag);
   *
   *   foreach ($flagging_users as $user) {
   *     // Do something.
   *   }
   * @endcode
   *
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity object.
   * @param \Drupal\flag\FlagInterface $flag
   *   (optional) The flag entity to which to restrict results.
   *
   * @return array
   *   An array of users who have flagged the entity.
   */
  public function getFlaggingUsers(EntityInterface $entity, FlagInterface $flag = NULL);

  /**
   * Flags the given entity given the flag and entity objects.
   *
   * To programatically create a flagging between a flag and an article:
   *
   * @code
   *   $flag_service = \Drupal::service('flag');
   *   $flag = $flag_service->getFlagById('bookmark');
   *   $node = Node::load($node_id);
   *   $flag_service->flag($flag, $node);
   * @endcode
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag entity.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity to flag.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   (optional) The account of the user flagging the entity. If not given,
   *   the current user is used.
   *
   * @return \Drupal\flag\FlagInterface|null
   *   The flagging.
   *
   * @throws \LogicException
   *   An exception is thrown if the given flag, entity, and account are not
   *   compatible in some way:
   *   - The flag applies to a different entity type from the given entity.
   *   - The flag does not apply to the entity's bundle.
   *   - The entity is already flagged with this flag by the user.
   */
  public function flag(FlagInterface $flag, EntityInterface $entity, AccountInterface $account = NULL);

  /**
   * Unflags the given entity for the given flag.
   *
   * @code
   *   $flag_service = \Drupal::service('flag');
   *   $flag = $flag_service->getFlagById('bookmark');
   *   $node = Node::load($node_id);
   *   $flag_service->unflag($flag, $node);
   * @endcode
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag being unflagged.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity to unflag.
   * @param AccountInterface $account
   *   (optional) The account of the user that created the flagging. Defaults
   *   to the current user.
   *
   * @throws \LogicException
   *   An exception is thrown if the given flag, entity, and account are not
   *   compatible in some way:
   *   - The flag applies to a different entity type from the given entity.
   *   - The flag does not apply to the entity's bundle.
   *   - The entity is not currently flagged with this flag by the user.
   */
  public function unflag(FlagInterface $flag, EntityInterface $entity, AccountInterface $account = NULL);

  /**
   * Remove all flaggings from an entity / made by an account.
   *
   * If no parameters are provided, all flaggings will be removed.
   *
   * @param \Drupal\Core\Entity\EntityInterface|NULL $entity
   *   (Optional) If provided, will remove all flaggings done to this entity.
   *   If NULL, flaggings for any entity will be removed.
   * @param \Drupal\Core\Session\AccountInterface|NULL $account
   *   (Optional) If provided, will remove all flaggings by this account.
   *   If NULL, flaggings for any account will be removed.
   */
  public function unflagAll(EntityInterface $entity = NULL, AccountInterface $account = NULL);

  /**
   * Shared helper for user account cancellation or deletion.
   *
   * Removes:
   *   All flags by the user.
   *   All flaggings of the user.
   *
   * @param \Drupal\user\UserInterface $account
   *   The account of the user being cancelled or deleted.
   */
  public function userFlagRemoval(UserInterface $account);

}
