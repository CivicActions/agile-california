<?php
/**
 * @file
 * Contains \Drupal\flag\Tests\LinkTypeConfirmFormTest.
 */

namespace Drupal\flag\Tests;

use Drupal\flag\FlagInterface;
use Drupal\simpletest\WebTestBase;
use Drupal\user\RoleInterface;
use Drupal\user\Entity\Role;

/**
 * Tests the confirm form link type.
 *
 * @group flag
 */
class LinkTypeConfirmFormTest extends FlagTestBase {

  protected $flagConfirmMessage = 'Flag test label 123?';
  protected $unflagConfirmMessage = 'Unflag test label 123?';

  /**
   * The flag object.
   *
   * @var FlagInterface
   */
  protected $flag;

  /**
   * Test the confirm form link type.
   */
  public function testCreateConfirmFlag() {
    $this->drupalLogin($this->adminUser);

    $this->doConfirmFormUI();
    $this->doCreateFlag();
    $this->doFlagUnflagNode();
  }

  /**
   * Test the confirm for UI.
   */
  public function doConfirmFormUI() {
    $this->drupalPostForm('admin/structure/flags/add', [], t('Continue'));

    // Update the flag.
    $edit = [
      'link_type' => 'confirm',
    ];
    $this->drupalPostAjaxForm(NULL, $edit, 'link_type');

    // Check confirm form field entry.
    $this->assertText(t('Flag confirmation message'));
    $this->assertText(t('Unflag confirmation message'));
  }

  /**
   * Create a flag.
   */
  public function doCreateFlag() {
    $edit = [
      'bundles[' . $this->nodeType . ']' => $this->nodeType,
      'flag_confirmation' => $this->flagConfirmMessage,
      'unflag_confirmation' => $this->unflagConfirmMessage,
    ];
    $this->flag = $this->createFlagWithForm('node', $edit, 'confirm');

    // Check to see if the flag was created.
    $this->assertText(t('Flag @this_label has been added.', ['@this_label' => $this->flag->label()]));
  }

  /**
   * Create a node, flag it and unflag it.
   */
  public function doFlagUnflagNode() {
    $node = $this->drupalCreateNode(['type' => $this->nodeType]);
    $node_id = $node->id();
    $flag_id = $this->flag->id();

    // Grant the flag permissions to the authenticated role, so that both
    // users have the same roles and share the render cache.
    $this->grantFlagPermissions($this->flag);

    // Create and login a new user.
    $user_1 = $this->drupalCreateUser();
    $this->drupalLogin($user_1);

    // Get the flag count before the flagging, querying the database directly.
    $flag_count_pre = db_query('SELECT count FROM {flag_counts}
      WHERE flag_id = :flag_id AND entity_type = :entity_type AND entity_id = :entity_id', [
      ':flag_id' => $flag_id,
      ':entity_type' => 'node',
      ':entity_id' => $node_id,
    ])->fetchField();

    // Click the flag link.
    $this->drupalGet('node/' . $node_id);
    $this->clickLink($this->flag->getFlagShortText());

    // Check if we have the confirm form message displayed.
    $this->assertText($this->flagConfirmMessage);

    // Submit the confirm form.
    $this->drupalPostForm('flag/confirm/flag/' . $flag_id . '/' . $node_id, [], t('Flag'));
    $this->assertResponse(200);

    // Check that the node is flagged.
    $this->drupalGet('node/' . $node_id);
    $this->assertLink($this->flag->getUnflagShortText());

    // Check the flag count was incremented.
    $flag_count_flagged = db_query('SELECT count FROM {flag_counts}
      WHERE flag_id = :flag_id AND entity_type = :entity_type AND entity_id = :entity_id', [
      ':flag_id' => $flag_id,
      ':entity_type' => 'node',
      ':entity_id' => $node_id,
    ])->fetchField();
    $this->assertEqual($flag_count_flagged, $flag_count_pre + 1, "The flag count was incremented.");

    // Unflag the node.
    $this->clickLink($this->flag->getUnflagShortText());

    // Check if we have the confirm form message displayed.
    $this->assertText($this->unflagConfirmMessage);

    // Submit the confirm form.
    $this->drupalPostForm(NULL, [], t('Unflag'));
    $this->assertResponse(200);

    // Check that the node is no longer flagged.
    $this->drupalGet('node/' . $node_id);
    $this->assertLink($this->flag->getFlagShortText());

    // Check the flag count was decremented.
    $flag_count_unflagged = db_query('SELECT count FROM {flag_counts}
      WHERE flag_id = :flag_id AND entity_type = :entity_type AND entity_id = :entity_id', [
      ':flag_id' => $flag_id,
      ':entity_type' => 'node',
      ':entity_id' => $node_id,
    ])->fetchField();
    $this->assertEqual($flag_count_unflagged, $flag_count_flagged - 1, "The flag count was decremented.");
  }

}
