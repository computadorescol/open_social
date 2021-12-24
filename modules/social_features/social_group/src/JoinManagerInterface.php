<?php

namespace Drupal\social_group;

use Drupal\Core\Plugin\Context\ContextAwarePluginManagerInterface;

/**
 * Defines the join manager interface.
 */
interface JoinManagerInterface extends ContextAwarePluginManagerInterface {

  /**
   * Preprocess theme variables for templates.
   *
   * @param array $variables
   *   The variables array (modify in place).
   * @param string $hook
   *   The name of the theme hook.
   */
  public function preprocess(array &$variables, string $hook): void;

}
