<?php

namespace Drupal\chhs_child\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\chhs_child\ChildEntityTypeInterface;

/**
 * Defines the Child type entity.
 *
 * @ConfigEntityType(
 *   id = "child_entity_type",
 *   label = @Translation("Child type"),
 *   handlers = {
 *     "list_builder" = "Drupal\chhs_child\ChildEntityTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\chhs_child\Form\ChildEntityTypeForm",
 *       "edit" = "Drupal\chhs_child\Form\ChildEntityTypeForm",
 *       "delete" = "Drupal\chhs_child\Form\ChildEntityTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\chhs_child\ChildEntityTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "child_entity_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "child_entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/chhs/chhs-children/child_entity_type/{child_entity_type}",
 *     "add-form" = "/admin/structure/chhs/chhs-children/child_entity_type/add",
 *     "edit-form" = "/admin/structure/chhs/chhs-children/child_entity_type/{child_entity_type}/edit",
 *     "delete-form" = "/admin/structure/chhs/chhs-children/child_entity_type/{child_entity_type}/delete",
 *     "collection" = "/admin/structure/chhs/chhs-children/child_entity_type"
 *   }
 * )
 */
class ChildEntityType extends ConfigEntityBundleBase implements ChildEntityTypeInterface {
  /**
   * The Child type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Child type label.
   *
   * @var string
   */
  protected $label;

}
