<?php

namespace Drupal\chhs_child;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Child entities.
 *
 * @ingroup chhs_child
 */
interface ChildEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.
  /**
   * Gets the Child type.
   *
   * @return string
   *   The Child type.
   */
  public function getType();

  /**
   * Gets the Child name.
   *
   * @return string
   *   Name of the Child.
   */
  public function getName();

  /**
   * Sets the Child name.
   *
   * @param string $name
   *   The Child name.
   *
   * @return \Drupal\chhs_child\ChildEntityInterface
   *   The called Child entity.
   */
  public function setName($name);

  /**
   * Gets the Child creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Child.
   */
  public function getCreatedTime();

  /**
   * Sets the Child creation timestamp.
   *
   * @param int $timestamp
   *   The Child creation timestamp.
   *
   * @return \Drupal\chhs_child\ChildEntityInterface
   *   The called Child entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Child published status indicator.
   *
   * Unpublished Child are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Child is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Child.
   *
   * @param bool $published
   *   TRUE to set this Child to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\chhs_child\ChildEntityInterface
   *   The called Child entity.
   */
  public function setPublished($published);

}
