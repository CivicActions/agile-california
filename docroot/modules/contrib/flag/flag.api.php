<?php

/**
 * @file
 * Hooks provided by the Flag module.
 */

use Drupal\flag\FlagInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\flag\FlaggingInterface;
/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alter flag type definitions provided by other modules.
 *
 * This hook may be placed in a $module.flag.inc file.
 *
 * @param array $definitions
 *   An array of flag definitions returned by hook_flag_type_info().
 */
function hook_flag_type_info_alter(array &$definitions) {

}

/**
 * Alter a flag's default options.
 *
 * Modules that wish to extend flags and provide additional options must declare
 * them here so that their additions to the flag admin form are saved into the
 * flag object.
 *
 * @param array $options
 *   The array of default options for the flag type, with the options for the
 *   flag's link type merged in.
 * @param \Drupal\flag\FlagInterface $flag
 *   The flag object.
 *
 * @see flag_flag::options()
 */
function hook_flag_options_alter(array &$options, FlagInterface $flag) {

}

/**
 * Perform custom validation on a flag before flagging/unflagging.
 *
 * @param string $action
 *   The action about to be carried out. Either 'flag' or 'unflag'.
 * @param \Drupal\flag\FlagInterface $flag
 *   The flag object.
 * @param int $entity_id
 *   The id of the entity the user is trying to flag or unflag.
 * @param \Drupal\Core\Session\AccountInterface $account
 *   The user account performing the action.
 * @param bool $skip_permission_check
 *   TRUE to skip the permission check, FALSE otherwise.
 * @param \Drupal\flag\FlaggingInterface $flagging
 *   The flagging entity.
 *
 * @return array|null
 *   (optional) array: textual error with the error-name as the key.
 *   If the error name is 'access-denied' and javascript is disabled,
 *   drupal_access_denied will be called and a 403 will be returned.
 *   If validation is successful, do not return a value.
 */
function hook_flag_validate($action, FlagInterface $flag, $entity_id,
                            AccountInterface $account, $skip_permission_check,
                            FlaggingInterface $flagging) {
}

/**
 * Alter the javascript structure that describes the flag operation.
 *
 * @param \Drupal\flag\FlagInterface $flag
 *   The full flag object.
 * @param int $entity_id
 *   The ID of the node, comment, user or other object being flagged.
 *
 * @see flag_build_javascript_info()
 */
function hook_flag_javascript_info_alter(FlagInterface $flag, $entity_id) {

}

/**
 * Alter other modules' definitions of flag link types.
 *
 * This hook may be placed in a $module.flag.inc file.
 *
 * @param $link_types
 *  An array of the link types defined by all modules.
 *
 * @see \Drupal\flag\ActionLink\ActionLinkPluginManager:getAllLinkTypes()
 */
function hook_flag_link_type_info_alter(array &$link_types) {

}
