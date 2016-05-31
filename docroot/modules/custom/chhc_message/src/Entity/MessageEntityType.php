<?php

namespace Drupal\chhc_message\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\chhc_message\MessageEntityTypeInterface;

/**
 * Defines the Message type entity.
 *
 * @ConfigEntityType(
 *   id = "message_entity_type",
 *   label = @Translation("Message type"),
 *   handlers = {
 *     "list_builder" = "Drupal\chhc_message\MessageEntityTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\chhc_message\Form\MessageEntityTypeForm",
 *       "edit" = "Drupal\chhc_message\Form\MessageEntityTypeForm",
 *       "delete" = "Drupal\chhc_message\Form\MessageEntityTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\chhc_message\MessageEntityTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "message_entity_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "message_entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/chhc/chhc-message/message_entity_type/{message_entity_type}",
 *     "add-form" = "/admin/structure/chhc/chhc-message/message_entity_type/add",
 *     "edit-form" = "/admin/structure/chhc/chhc-message/message_entity_type/{message_entity_type}/edit",
 *     "delete-form" = "/admin/structure/chhc/chhc-message/message_entity_type/{message_entity_type}/delete",
 *     "collection" = "/admin/structure/chhc/chhc-message/message_entity_type"
 *   }
 * )
 */
class MessageEntityType extends ConfigEntityBundleBase implements MessageEntityTypeInterface {
  /**
   * The Message type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Message type label.
   *
   * @var string
   */
  protected $label;

}
