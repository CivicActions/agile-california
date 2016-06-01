<?php
/**
 * @file
 * Contains \Drupal\map\Controller\MapController.
 */

namespace Drupal\map\Controller;

use Drupal\Core\Controller\ControllerBase;

class MapController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => '<div id="facmap" style="width: 600px; height: 400px"></div>',
    );
  }
}