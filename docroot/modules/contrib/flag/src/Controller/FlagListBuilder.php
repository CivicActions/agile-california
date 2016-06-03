<?php
/**
 * @file
 * Contains \Drupal\flag\Controller\FlagListBuilder.
 */

namespace Drupal\flag\Controller;

use Drupal\Core\Config\Entity\DraggableListBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\flag\FlagInterface;
use Drupal\Core\Url;

/**
 * Provides a entity list page for Flags.
 */
class FlagListBuilder extends DraggableListBuilder {

  /**
   * {@inheritdoc}
   */
  protected $entitiesKey = 'flags';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'flag_list';
  }

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = t('Flag');
    $header['flag_type'] = t('Flag Type');
    $header['roles'] = t('Roles');
    $header['bundles'] = t('Entity Bundles');
    $header['global'] = t('Scope');
    $header['status'] = t('Status');

    return $header + parent::buildHeader();
  }

  /**
   * Creates a render array of roles that may use the flag.
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag entity.
   *
   * @return array
   *   A render array of flag roles for the entity.
   */
  protected function getFlagRoles(FlagInterface $flag) {
    $all_roles = [];

    foreach (array_keys($flag->getPermissions()) as $perm) {
      $roles = user_roles(FALSE, $perm);

      foreach ($roles as $rid => $role) {
        $all_roles[$rid] = $role->label();
      }
    }

    $out = implode(', ', $all_roles);

    if (empty($out)) {
      return [
        '#markup' => '<em>' . $this->t('None') . '</em>',
        '#allowed_tags' => ['em'],
      ];
    }

    return [
      '#markup' => rtrim($out, ', '),
    ];
  }

  /**
   * Gets the flag type label for the given flag.
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag entity.
   *
   * @return array
   *   A render array of the flag type label.
   */
  protected function getFlagType(FlagInterface $flag) {
    // Get the flaggable entity type definition.
    $flaggable_entity_type = \Drupal::entityTypeManager()
      ->getDefinition($flag->getFlaggableEntityTypeId());

    return [
      '#markup' => $flaggable_entity_type->getLabel(),
    ];
  }

  /**
   * Generates a render array of the applicable bundles for the flag..
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag entity.
   *
   * @return array
   *   A render array of the applicable bundles for the flag..
   */
  protected function getBundles(FlagInterface $flag) {
    $bundles = $flag->getBundles();

    if (empty($bundles)) {
      return [
        '#markup' => '<em>' . $this->t('All') . '</em>',
        '#allowed_tags' => ['em'],
      ];
    }

    return [
      '#markup' => implode(', ', $bundles),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {

    $row['label'] = $entity->label();

    $row['flag_type'] = $this->getFlagType($entity);

    $row['roles'] = $this->getFlagRoles($entity);

    $row['bundles'] = $this->getBundles($entity);

    $row['global'] = [
      '#markup' => $entity->isGlobal() ? t('Global') : t('Personal'),
    ];

    $row['status'] = [
      '#markup' => $entity->isEnabled() ? t('Enabled') : t('Disabled'),
    ];

    return $row + parent::buildRow($entity);
  }

}
