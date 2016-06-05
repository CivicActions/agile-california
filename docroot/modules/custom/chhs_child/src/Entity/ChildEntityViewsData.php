<?php

namespace Drupal\chhs_child\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Child entities.
 */
class ChildEntityViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['child_entity']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Child'),
      'help' => $this->t('The Child ID.'),
    );

    return $data;
  }

}
