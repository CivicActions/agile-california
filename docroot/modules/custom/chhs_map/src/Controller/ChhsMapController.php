<?php
/**
 * @file
 * Contains \Drupal\chhs_map\Controller\MapController.
 */

namespace Drupal\chhs_map\Controller;

use Drupal\Core\Controller\ControllerBase;

class ChhsMapController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => '<div id="facmap" style="width: 600px; height: 400px"></div>',
      '#attached' => array('library' => array('chhs_map/map-js')),
    );
  }
}
