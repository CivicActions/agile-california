<?php

namespace Drupal\chhs_message;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Message entities.
 *
 * @ingroup chhs_message
 */
interface MessageEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.
  /**
   * Gets the Message type.
   *
   * @return string
   *   The Message type.
   */
  public function getType();

  /**
   * Gets the Message subject.
   *
   * @return string
   *   Subject of the Message.
   */
  public function getSubject();

  /**
   * Sets the Message subject.
   *
   * @param string $subject
   *   The Message subject.
   *
   * @return \Drupal\chhs_message\MessageEntityInterface
   *   The called Message entity.
   */
  public function setSubject($subject);

  /**
   * Gets the Message creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Message.
   */
  public function getCreatedTime();

  /**
   * Sets the Message creation timestamp.
   *
   * @param int $timestamp
   *   The Message creation timestamp.
   *
   * @return \Drupal\chhs_message\MessageEntityInterface
   *   The called Message entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Message published status indicator.
   *
   * Unpublished Message are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Message is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Message.
   *
   * @param bool $published
   *   TRUE to set this Message to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\chhs_message\MessageEntityInterface
   *   The called Message entity.
   */
  public function setPublished($published);

}
