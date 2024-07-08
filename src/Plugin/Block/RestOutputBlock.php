<?php

namespace Drupal\dependency_injection_exercise\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\dependency_injection_exercise\CustomService;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'RestOutputBlock' block.
 *
 * @Block(
 *  id = "rest_output_block",
 *  admin_label = @Translation("Rest output block"),
 * )
 */
class RestOutputBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The custom service.
   *
   * @var \Drupal\dependency_injection_exercise\CustomService
   */
  protected $customService;

  /**
   * Constructs a new RestOutputBlock object.
   *
   * @param array $configuration
   *   The plugin configuration, i.e. an array with configuration values keyed
   *   by configuration option name. The special key 'context' may be used to
   *   initialize the defined contexts by setting it to an array of context
   *   values keyed by context names.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\dependency_injection_exercise\CustomService $customService
   *   The custom service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, CustomService $customService) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->customService = $customService;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('dependency_injection_exercise.custom_service')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    // Setup build caching.
    return $this->customService->renderedBlock();
  }

}
