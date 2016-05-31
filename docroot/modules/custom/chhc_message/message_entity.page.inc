<?php

/**
 * @file
 * Contains message_entity.page.inc.
 *
 * Page callback for Message entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Message templates.
 *
 * Default template: message_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_message_entity(array &$variables) {
  // Fetch MessageEntity Entity Object.
  $message_entity = $variables['elements']['#message_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}

/**
* Prepares variables for a custom entity type creation list templates.
*
* Default template: message_entity-content-add-list.html.twig.
*
* @param array $variables
*   An associative array containing:
*   - content: An array of message_entity-types.
*
* @see block_content_add_page()
*/
function template_preprocess_message_entity_content_add_list(&$variables) {
  $variables['types'] = array();
  $query = \Drupal::request()->query->all();
  foreach ($variables['content'] as $type) {
    $variables['types'][$type->id()] = array(
      'link' => Link::fromTextAndUrl($type->label(), new Url('entity.message_entity.add_form', array(
        'message_entity_type' => $type->id()
      ), array('query' => $query))),
      'description' => array(
      '#markup' => $type->label(),
      ),
      'title' => $type->label(),
      'localized_options' => array(
      'query' => $query,
      ),
    );
  }
}
