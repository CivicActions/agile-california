<?php

/**
 * @file
 * Contains \Drupal\flag\Access\FlagAccessCheck.
 */

namespace Drupal\flag\Access;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\flag\FlagInterface;

/**
 * Provides routes with the ability to check access to the 'flag' action.
 *
 * @ingroup flag_access
 */
class FlagAccessCheck implements AccessInterface {

  /**
   * Checks access to the 'flag' action.
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag entity.
   *
   * @return string
   *   A \Drupal\Core\Access\AccessInterface constant value.
   */
  public function access(FlagInterface $flag) {
    return AccessResult::allowedIf($flag->hasActionAccess('flag'));
  }

}
