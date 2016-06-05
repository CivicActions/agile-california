<?php
/**
 * @file
 * Contains \Drupal\flag\Plugin\Flag\UserFlagType.
 */

namespace Drupal\flag\Plugin\Flag;

use Drupal\Core\Session\AccountInterface;
use Drupal\flag\Plugin\Flag\EntityFlagType;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a flag type for user entities.
 *
 * @FlagType(
 *   id = "entity:user",
 *   title = @Translation("User"),
 *   entity_type = "user",
 *   provider = "user"
 * )
 */
class UserFlagType extends EntityFlagType {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $options = parent::defaultConfiguration();
    $options += [
      'show_on_profile' => TRUE,
      'access_uid' => TRUE,
    ];
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    /* Options form extras for user flags */

    $form['access']['bundles'] = [
      // A user flag doesn't support node types.
      // TODO: Maybe support roles instead of node types.
      '#type' => 'value',
      '#value' => array(0 => 0),
    ];
    $form['access']['access_uid'] = [
      '#type' => 'checkbox',
      '#title' => t('Users may flag themselves'),
      '#description' => t('Disabling this option may be useful when setting up a "friend" flag, when a user flagging themselves does not make sense.'),
      '#default_value' => $this->getAccessUidSetting(),
    ];
    $form['display']['show_on_profile'] = [
      '#type' => 'checkbox',
      '#title' => t('Display link on user profile page'),
      '#description' => t('Show the link formatted as a user profile element.'),
      '#default_value' => $this->showOnProfile(),
      // Put this above 'show on entity'.
      '#weight' => -1,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['access_uid'] = $form_state->getValue(['access_uid']);
    $this->configuration['show_on_profile'] = $form_state->getValue(['show_on_profile']);
  }

  /**
   * Specifies if users are able to flag themselves.
   *
   * @return bool|mixed
   *   TRUE if users are able to flag themselves, FALSE otherwise.
   */
  public function getAccessUidSetting() {
    return $this->configuration['access_uid'];
  }

  /**
   * Specifies if the flag link should appear on the user profile.
   *
   * @return bool
   *   TRUE if the flag link appears on the user profile, FALSE otherwise.
   */
  public function showOnProfile() {
    return $this->configuration['show_on_profile'];
  }
}
