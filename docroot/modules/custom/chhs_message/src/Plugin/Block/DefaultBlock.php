<?php

namespace Drupal\chhs_message\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Demo accounts"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['default_block']['#markup'] = t('<p>You can login with the following accounts with the password "demo":</p><ul><li>biological-parent</li><li>foster-parent</li><li>case-worker</li><li>case-manager</li></ul>');
    return $build;
  }
}
