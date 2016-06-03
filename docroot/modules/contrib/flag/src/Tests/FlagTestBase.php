<?php
/**
 * @file
 * Contains \Drupal\flag\Tests\FlagTestBase.
 */

namespace Drupal\flag\Tests;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\flag\FlagInterface;
use Drupal\simpletest\WebTestBase;
use Drupal\flag\Entity\Flag;
use Drupal\user\RoleInterface;
use Drupal\user\Entity\Role;

/**
 * Provides common methods for Flag tests.
 */
abstract class FlagTestBase extends WebTestBase {

  use StringTranslationTrait;

  /**
   * The flag service.
   *
   * @var \Drupal\flag\FlagServiceInterface
   */
  protected $flagService;

  /**
   * A user with Flag admin rights.
   *
   * @var AccountInterface
   */
  protected $adminUser;

  /**
   * The node type to use in the test.
   *
   * @var string
   */
  protected $nodeType = 'article';

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Get the Flag Service.
    $this->flagService = \Drupal::service('flag');

    // Place the title block, otherwise some tests fail.
    $this->drupalPlaceBlock('page_title_block', ['region' => 'content']);

    // Create content type.
    $this->drupalCreateContentType(['type' => $this->nodeType]);

    // Create the admin user.
    $this->adminUser = $this->createUser([
      'administer flags',
      'administer flagging display',
      'administer flagging fields',
      'administer node display',
      'administer modules',
      'administer nodes',
      'edit any ' . $this->nodeType . ' content',
    ]);
  }

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array(
    'views',
    'node',
    'user',
    'flag',
    'node',
    'field_ui',
    'text',
    'block',
  );

  /**
   * Create a basic flag programmatically.
   *
   * Creates a flag with the given entity type, bundles, and link type without
   * using the admin UI. The flag's ID, label, flag and unflag text will be
   * random strings.
   *
   * @param string|null $entity_type
   *   (optional) The entity type of the flag to create. If omitted,
   *   assumes 'node'.
   * @param array $bundles
   *   (optional) An array of entity bundles to which the flag applies.
   *   If NULL, all bundles are assumed.
   * @param string|null $link_type
   *   (optional) The ID of the link type to use. If omitted, assumes 'reload'.
   *
   * @return \Drupal\flag\FlagInterface
   *   A new flag entity with the given criteria.
   */
  protected function createFlag($entity_type = 'node', array $bundles = [], $link_type = 'reload') {
    return $this->createFlagFromArray([
      'entity_type' => $entity_type,
      'bundles' => $bundles,
      'link_type' => $link_type,
    ]);
  }

  /**
   * Create a global flag programmatically.
   *
   * Creates a flag with the given entity type, bundles, and link type without
   * using the admin UI. The flag's ID, label, flag and unflag text will be
   * random strings.
   *
   * @param string|null $entity_type
   *   (optional) The entity type of the flag to create. If omitted,
   *   assumes 'node'.
   * @param array $bundles
   *   (optional) An array of entity bundles to which the flag applies.
   *   If NULL, all bundles are assumed.
   * @param string|null $link_type
   *   (optional) The ID of the link type to use. If omitted, assumes 'reload'.
   *
   * @return \Drupal\flag\FlagInterface
   *   A new flag entity with the given criteria.
   */
  protected function createGlobalFlag($entity_type = 'node', array $bundles = [], $link_type = 'reload') {
    return $this->createFlagFromArray([
      'entity_type' => $entity_type,
      'bundles' => $bundles,
      'link_type' => $link_type,
      'global' => TRUE,
    ]);
  }

  /**
   * Creates a flag from an array.
   *
   * Sensible key values pairs will be inserted into the input array if not
   * provided.
   *
   * @param array $edit
   *   The edit array to pass to Flag::create().
   *
   * @return \Drupal\flag\FlagInterface
   *   A new flag entity with the given criteria.
   */
  protected function createFlagFromArray(array $edit) {

    $default = [
      'id' => strtolower($this->randomMachineName()),
      'label' => $this->randomString(),
      'entity_type' => 'node',
      'bundles' => array_keys(\Drupal::service('entity_type.bundle.info')->getBundleInfo('node')),
      'flag_short' => $this->randomString(),
      'unflag_short' => $this->randomString(),
      'unflag_denied_text' => $this->randomString(),
      'flag_long' => $this->randomString(16),
      'unflag_long' => $this->randomString(16),
      'flag_message' => $this->randomString(32),
      'unflag_message' => $this->randomString(32),
      'flag_type' => $this->getFlagType('node'),
      'link_type' => 'reload',
      'flagTypeConfig' => [],
      'linkTypeConfig' => [],
      'global' => FALSE,
    ];

    foreach ($default as $key => $value) {
      if (empty($edit[$key])) {
        $edit[$key] = $value;
      }
    }

    // Create the flag programmatically.
    $flag = Flag::create($edit);

    // Save the flag.
    $flag->save();

    // Make sure that we actually did get a flag entity.
    $this->assertTrue($flag instanceof Flag);

    return $flag;
  }

  /**
   * Creates a flag entity using the admin UI.
   *
   * If you do not provide any bundles in $edit, all bundles for $entity_type
   * are assumed.
   *
   * @param string|null $entity_type
   *   (optional) A string containing the flaggable entity type, by default
   *   'node'.
   * @param array $edit
   *   (optional) An array of form field names and values. If omitted, random
   *   strings will be used for the flag ID, label, short and long text.
   * @param string|null $link_type
   *   (optional) A string containing the link type ID. Is omitted, assumes
   *   'reload'.
   *
   * @return \Drupal\flag\FlagInterface|null
   *   The created flag entity.
   */
  protected function createFlagWithForm($entity_type = 'node', $edit = [], $link_type = 'reload') {
    // Submit the flag add page.
    $this->drupalPostForm('admin/structure/flags/add', [
      'flag_entity_type' => $this->getFlagType($entity_type),
    ], $this->t('Continue'));

    // Set the link type.
    $this->drupalPostAjaxForm(NULL, ['link_type' => $link_type], 'link_type');

    // Create an array of defaults.
    $default_edit = [
      'id' => strtolower($this->randomMachineName()),
      'label' => $this->randomString(),
      'flag_short' => $this->randomString(),
      'unflag_short' => $this->randomString(),
      'flag_long' => $this->randomString(16),
      'unflag_long' => $this->randomString(16),
      'flag_message' => $this->randomString(32),
      'unflag_message' => $this->randomString(32),
      'unflag_denied_text' => $this->randomString(),
    ];

    // Merge the default values with the edit array.
    $final_edit = array_merge($default_edit, $edit);

    // Submit the flag details form.
    $this->drupalPostForm(NULL, $final_edit, $this->t('Create Flag'));

    // Load the new flag we created.
    $flag = Flag::load($final_edit['id']);

    // Make sure that we actually did get a flag entity.
    $this->assertTrue($flag instanceof Flag);

    // Return the flag.
    return $flag;
  }

  /**
   * Grants flag and unflag permission to the given flag.
   *
   * @param \Drupal\flag\FlagInterface $flag
   *   The flag on which to grant permissions.
   * @param array|string $role_id
   *   (optional) The ID of the role to grant permissions. If omitted, the
   *   authenticated role is assumed.
   * @param bool $can_flag
   *   (optional) TRUE to grant the role flagging permission, FALSE to not grant
   *   flagging permission to the role. If omitted, TRUE is assumed.
   * @param bool $can_unflag
   *   Optional TRUE to grant the role unflagging permission, FALSE to not grant
   *   unflagging permission to the role. If omitted, TRUE is assumed.
   */
  protected function grantFlagPermissions(FlagInterface $flag,
                                      $role_id = RoleInterface::AUTHENTICATED_ID,
                                      $can_flag = TRUE, $can_unflag = TRUE) {

    // Grant the flag permissions to the authenticated role, so that both
    // users have the same roles and share the render cache.
    $role = Role::load($role_id);
    if ($can_flag) {
      $role->grantPermission('flag ' . $flag->id());
    }

    if ($can_unflag) {
      $role->grantPermission('unflag ' . $flag->id());
    }

    $role->save();
  }

  /**
   * Get a flag type plugin ID for the given entity.
   *
   * @param string $entity_type
   *   The entity type of the flag type plugin to get.
   *
   * @return string
   *   A string containing the flag type ID.
   */
  protected function getFlagType($entity_type) {
    $all_flag_types = \Drupal::service('plugin.manager.flag.flagtype')->getDefinitions();

    // Search and return the flag type ID that matches our entity.
    foreach ($all_flag_types as $plugin_id => $plugin_def) {
      if ($plugin_def['entity_type'] == $entity_type) {
        return $plugin_id;
      }
    }

    // Return the generic entity flag type plugin ID.
    return 'entity';
  }

}
