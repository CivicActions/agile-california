<?php

namespace Drupal\chhs_message\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class MessageEntityTypeForm.
 *
 * @package Drupal\chhs_message\Form
 */
class MessageEntityTypeForm extends EntityForm {
  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $message_entity_type = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $message_entity_type->label(),
      '#description' => $this->t("Label for the Message type."),
      '#required' => TRUE,
    );

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $message_entity_type->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\chhs_message\Entity\MessageEntityType::load',
      ),
      '#disabled' => !$message_entity_type->isNew(),
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $message_entity_type = $this->entity;
    $status = $message_entity_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Message type.', [
          '%label' => $message_entity_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Message type.', [
          '%label' => $message_entity_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($message_entity_type->urlInfo('collection'));
  }

}
