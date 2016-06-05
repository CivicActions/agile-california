<?php
/**
 * @file
 * Contains the \Drupal\flag\FlagType\FlagTypePluginInterface.
 */

namespace Drupal\flag\FlagType;

use Drupal\Core\Plugin\PluginFormInterface;
use Drupal\Component\Plugin\ConfigurablePluginInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides an interface for all flag type plugins.
 */
interface FlagTypePluginInterface extends PluginFormInterface, ConfigurablePluginInterface {
}
