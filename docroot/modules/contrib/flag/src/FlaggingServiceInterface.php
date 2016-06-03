<?php

/**
 * @file
 * Contains Drupal\flag\FlaggingServiceInterface.
 */

namespace Drupal\flag;

use Drupal\Core\Entity\EntityInterface;
use Drupal\flag\FlagInterface;

/**
 * Interface FlaggingServiceInterface.
 */
interface FlaggingServiceInterface {

  /**
   * Remove all flagged entities from a flag.
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag to reset.
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   (optional) The entity for which to delete flaggings.
   *
   * @return int
   *   The number of flaggings that have been deleted.
   */
  public function reset(FlagInterface $flag, EntityInterface $entity = NULL);

}
