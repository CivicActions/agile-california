<?php

namespace Drupal\chhs_message;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Message entities.
 *
 * @ingroup chhs_message
 */
class MessageEntityListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Message ID');
    $header['subject'] = $this->t('Subject');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\chhs_message\Entity\MessageEntity */
    $row['id'] = $entity->id();
    $row['subject'] = $this->l(
      $entity->label(),
      new Url(
        'entity.message_entity.edit_form', array(
          'message_entity' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
