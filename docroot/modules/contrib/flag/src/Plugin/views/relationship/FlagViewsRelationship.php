<?php
/**
 * @file
 * Contains \Drupal\flag\Plugin\views\relationship\FlagViewsRelationship.
 */

namespace Drupal\flag\Plugin\views\relationship;

use Drupal\user\RoleInterface;
use Drupal\views\Plugin\views\relationship\RelationshipPluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Provides a views relationship to select flag content by a flag.
 *
 * @ViewsRelationship("flag_relationship")
 */
class FlagViewsRelationship extends RelationshipPluginBase {

  /**
   * {@inheritdoc}
   */
  public function defineOptions() {
    $options = parent::defineOptions();
    $options['flag'] = ['default' => NULL];
    $options['required'] = ['default' => 1];
    $options['user_scope'] = ['default' => 'current'];
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    $entity_type = $this->definition['flaggable'];
    $form['label']['#description'] .= ' ' . t('The name of the selected flag makes a good label.');

    $flags = \Drupal::service('flag')->getFlags($entity_type);

    $default_value = $this->options['flag'];
    if (!empty($flags)) {
      $default_value = current(array_keys($flags));
    }

    $form['flag'] = [
      '#type' => 'radios',
      '#title' => t('Flag'),
      '#default_value' => $default_value,
      '#required' => TRUE,
    ];

    foreach ($flags as $flag_id => $flag) {
      if (!empty($flag)) {
        $form['flag']['#options'][$flag_id] = $flag->label();
      }
    }

    $form['user_scope'] = [
      '#type' => 'radios',
      '#title' => t('By'),
      '#options' => ['current' => t('Current user'), 'any' => t('Any user')],
      '#default_value' => $this->options['user_scope'],
    ];

    $form['required']['#title'] = t('Include only flagged content');
    $form['required']['#description'] = t('If checked, only content that has this flag will be included. Leave unchecked to include all content; or, in combination with the <em>Flagged</em> filter, <a href="@unflagged-url">to limit the results to specifically unflagged content</a>.', ['@unflagged-url' => 'http://drupal.org/node/299335']);

    if (!$form['flag']['#options']) {
      $form = [
        'error' => [
          '#markup' => '<p class="error form-item">' . t('No %type flags exist. You must first <a href="@create-url">create a %type flag</a> before being able to use this relationship type.', ['%type' => $entity_type, '@create-url' => Url::fromRoute('entity.flag.collection')->toString()]) . '</p>',
        ],
      ];
    }
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    if (!($flag = $this->getFlag())) {
      return;
    }

    $this->definition['extra'][] = [
      'field' => 'flag_id',
      'value' => $flag->id(),
      'numeric' => TRUE,
    ];

    if ($this->options['user_scope'] == 'current' && !$flag->isGlobal()) {
      $this->definition['extra'][] = [
        'field' => 'uid',
        'value' => '***CURRENT_USER***',
        'numeric' => TRUE,
      ];
      $flag_roles = user_roles(FALSE, "flag $flag->id()");
      if (isset($flag_roles[RoleInterface::ANONYMOUS_ID])) {
        // Disable page caching for anonymous users.
        \Drupal::service('page_cache_kill_switch')->trigger();

        // Add in the SID from Session API for anonymous users.
        $this->definition['extra'][] = [
          'field' => 'sid',
          'value' => '***FLAG_CURRENT_USER_SID***',
          'numeric' => TRUE,
        ];
      }
    }

    parent::query();
  }

  /**
   * Get the flag of the relationship.
   *
   * @return \Drupal\flag\FlagInterface|null
   *   The flag being selected by in the view.
   */
  public function getFlag() {
    $flag = \Drupal::service('flag')->getFlagById($this->options['flag']);
    return $flag;
  }
}
