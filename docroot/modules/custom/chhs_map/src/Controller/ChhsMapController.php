<?php
/**
 * @file
 * Contains \Drupal\chhs_map\Controller\MapController.
 */

namespace Drupal\chhs_map\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ChhsMapController extends ControllerBase {
  public function content() {
    $account = \Drupal::currentUser();
    $zip = FALSE;
    $profile_access = FALSE;
    foreach (\Drupal\profile\Entity\ProfileType::loadMultiple() as $bundle) {
      // Check for create access for each profile type.
      $access = \Drupal::entityManager()->getAccessControlHandler('profile')->createAccess($bundle->id(), NULL, [], TRUE);
      if ($access->isAllowed()) {
        $profile_access = $bundle->id();
        // Attempt to load the profile.
        $profile = \Drupal::entityTypeManager()->getStorage('profile')->loadByUser($account, $bundle->id());
        if (!empty($profile) && !empty($profile->field_zip->value)) {
          // We have located a zip code, so we can stop looking.
          $zip = $profile->field_zip->value;
          continue;
        }
      }
    }
    if ($zip) {
      $update_zip = Url::fromRoute('entity.profile.type.' . $profile_access . '.user_profile_form',
        array('user' => $account->id(), 'profile_type' => $profile_access),
        array('query' => array('destination' => 'map')));
      $build = array(
        '#type' => 'markup',
        '#prefix' => '<div class="map--info">' . t('Showing facilities near %zip (<a href=":updatezip">update zip</a>)', array('%zip' => $zip, ':updatezip' => $update_zip->toString())) . ':</div>',
        '#markup' => '<div class="map--map" id="facmap"></div><table class="map--list" id="faclist"></table>',
        '#attached' => array(
          'library' => array('chhs_map/map-js'),
          'drupalSettings' => array('chhs_map' => array('zip' => $zip)),
        ),
        '#cache' => [
          'contexts' => [
            'user',
          ],
        ],
      );
      $renderer = \Drupal::service('renderer');
      $renderer->addCacheableDependency($build, \Drupal\user\Entity\User::load($account->id()));
      return $build;
    }
    if ($profile_access) {
      drupal_set_message(t('Please configure your Zip code on your profile to see nearby facilities.'));
      return $this->redirect('entity.profile.add_form',
        array('user' => $account->id(), 'profile_type' => $profile_access),
        array('query' => array('destination' => 'map')));
    }
    // User doesn't have permission to add a profile or view the map.
    throw new AccessDeniedHttpException();
  }
}
