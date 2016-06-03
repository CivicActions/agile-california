<?php

/**
 * @file
 * Contains chhc_inbox\chhc_inbox.views.inc..
 * Provide a custom views field data that isn't tied to any other module. */

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Render\Markup;
use Drupal\field\FieldConfigInterface;
use Drupal\field\FieldStorageConfigInterface;
use Drupal\system\ActionConfigEntityInterface;

/**
* Implements hook_views_data().
*/
function chhc_inbox_views_data() {

    $data['views']['table']['group'] = t('Custom Global');
    $data['views']['table']['join'] = array(
      // #global is a special flag which allows a table to appear all the time.
      '#global' => array(),
    );


    $data['views']['message_status_views_field'] = array(
        'title' => t('Message status views field'),
        'help' => t('Custom Views field for flag status of message'),
        'field' => array(
            'id' => 'message_status_views_field',
        ),
    );

    return $data;
}
