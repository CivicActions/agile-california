<?php

namespace Drupal\chhs_child\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ChildEntityTypeForm.
 *
 * @package Drupal\chhs_child\Form
 */
class ChildEntityTypeForm extends EntityForm {
  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $child_entity_type = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $child_entity_type->label(),
      '#description' => $this->t("Label for the Child type."),
      '#required' => TRUE,
    );

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $child_entity_type->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\chhs_child\Entity\ChildEntityType::load',
      ),
      '#disabled' => !$child_entity_type->isNew(),
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $child_entity_type = $this->entity;
    $status = $child_entity_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Child type.', [
          '%label' => $child_entity_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Child type.', [
          '%label' => $child_entity_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($child_entity_type->urlInfo('collection'));
  }

}
