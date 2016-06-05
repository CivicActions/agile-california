<?php

/**
 * @file
 * Contains \Drupal\flag\FlaggingViewsData.
 */

namespace Drupal\flag;

use Drupal\flag\Entity\Flag;
use Drupal\views\EntityViewsData;

/**
 * Provides the views data for the flagging entity type.
 */
class FlaggingViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Remove the 'delete flagging' link that Views provides.
    unset($data['delete_flagging']);

    // Flag link.
    $data['flagging']['link_flag'] = [
      'field' => [
        'title' => t('Flag link'),
        'help' => t('Display flag/unflag link.'),
        'id' => 'flag_link',
      ],
    ];

    // Specialized is null/is not null field.
    $data['flagging']['flagged'] = [
      'title' => t('Flagged'),
      'real field' => 'uid',
      'field' => [
        'id' => 'flag_flagged',
        'label' => t('Flagged'),
        'help' => t('A boolean field to show whether the flag is set or not.'),
      ],
      'filter' => [
        'id' => 'flag_filter',
        'label' => t('Flagged'),
        'help' => t('Filter to ensure content has or has not been flagged.'),
      ],
      'sort' => [
        'id' => 'flag_sort',
        'label' => t('Flagged'),
        'help' => t('Sort by whether entities have or have not been flagged.'),
      ],
    ];

    /** @var \Drupal\Core\Entity\EntityFieldManagerInterface $entity_field_manager */
    $entity_type_manager = \Drupal::entityTypeManager();
    foreach (Flag::loadMultiple(NULL) as $flag_id => $flag) {
      /** @var \Drupal\flag\Entity\Flag $flag */
      $entity_type = $entity_type_manager->getDefinition($flag->getFlaggableEntityTypeId());
      if ($base = $entity_type->getDataTable() ?: $entity_type->getBaseTable()) {
        $data['flagging']['flag_' . $flag_id]['relationship'] = [
          'title' => $entity_type->getLabel(),
          'help' => $this->t('The @entity_type this flagging belongs to.', ['@entity_type' => $entity_type->getLabel()]),
          'base' => $base,
          'base field' => $entity_type->getKey('id'),
          'relationship field' => 'entity_id',
          'id' => 'standard',
          'label' => $entity_type->getLabel(),
          'extra' => [[
            'field' => 'flag_id',
            'value' => $flag_id,
            'table' => 'flagging'
          ]],
        ];
      }
    }

    return $data;
  }

}
