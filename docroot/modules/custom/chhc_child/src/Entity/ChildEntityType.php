<?php

namespace Drupal\chhc_child\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\chhc_child\ChildEntityTypeInterface;

/**
 * Defines the Child type entity.
 *
 * @ConfigEntityType(
 *   id = "child_entity_type",
 *   label = @Translation("Child type"),
 *   handlers = {
 *     "list_builder" = "Drupal\chhc_child\ChildEntityTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\chhc_child\Form\ChildEntityTypeForm",
 *       "edit" = "Drupal\chhc_child\Form\ChildEntityTypeForm",
 *       "delete" = "Drupal\chhc_child\Form\ChildEntityTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\chhc_child\ChildEntityTypeHtmlRouteProvider",
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
 *     "canonical" = "/admin/structure/chhc/chhc-children/child_entity_type/{child_entity_type}",
 *     "add-form" = "/admin/structure/chhc/chhc-children/child_entity_type/add",
 *     "edit-form" = "/admin/structure/chhc/chhc-children/child_entity_type/{child_entity_type}/edit",
 *     "delete-form" = "/admin/structure/chhc/chhc-children/child_entity_type/{child_entity_type}/delete",
 *     "collection" = "/admin/structure/chhc/chhc-children/child_entity_type"
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
