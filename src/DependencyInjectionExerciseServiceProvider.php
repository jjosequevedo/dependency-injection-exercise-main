<?php

namespace Drupal\dependency_injection_exercise;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Defines a service provider for the Dependecy injection exercise module.
 */
class DependencyInjectionExerciseServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    if ($container->hasDefinition('plugin.manager.mail')) {
      $definition = $container->getDefinition('plugin.manager.mail');
      $definition->setClass(CustomMailManager::class);
    }
  }

}
