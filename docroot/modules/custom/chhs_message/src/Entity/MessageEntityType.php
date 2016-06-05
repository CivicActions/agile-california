<?php

namespace Drupal\chhs_message\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\chhs_message\MessageEntityTypeInterface;

/**
 * Defines the Message type entity.
 *
 * @ConfigEntityType(
 *   id = "message_entity_type",
 *   label = @Translation("Message type"),
 *   handlers = {
 *     "list_builder" = "Drupal\chhs_message\MessageEntityTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\chhs_message\Form\MessageEntityTypeForm",
 *       "edit" = "Drupal\chhs_message\Form\MessageEntityTypeForm",
 *       "delete" = "Drupal\chhs_message\Form\MessageEntityTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\chhs_message\MessageEntityTypeHtmlRouteProvider",
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
 *     "canonical" = "/admin/structure/chhs/chhs-message/message_entity_type/{message_entity_type}",
 *     "add-form" = "/admin/structure/chhs/chhs-message/message_entity_type/add",
 *     "edit-form" = "/admin/structure/chhs/chhs-message/message_entity_type/{message_entity_type}/edit",
 *     "delete-form" = "/admin/structure/chhs/chhs-message/message_entity_type/{message_entity_type}/delete",
 *     "collection" = "/admin/structure/chhs/chhs-message/message_entity_type"
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
