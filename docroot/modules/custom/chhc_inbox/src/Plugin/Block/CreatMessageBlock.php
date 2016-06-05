<?php

namespace Drupal\chhc_inbox\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CreatMessageBlock' block.
 *
 * @Block(
 *  id = "creat_message_block",
 *  admin_label = @Translation("New Message"),
 * )
 */
class CreatMessageBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['creat_message_block']['#markup'] = 'Implement CreatMessageBlock.';

    return $build;
  }

}
