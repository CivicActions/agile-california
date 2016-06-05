<?php

namespace Drupal\chhs_message\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Message entities.
 */
class MessageEntityViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['message_entity']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Message'),
      'help' => $this->t('The Message ID.'),
    );

    return $data;
  }

}
