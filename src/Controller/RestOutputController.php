<?php

namespace Drupal\dependency_injection_exercise\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\dependency_injection_exercise\CustomService;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the rest output.
 */
class RestOutputController extends ControllerBase {

  /**
   * The custom service.
   *
   * @var \Drupal\dependency_injection_exercise\CustomService
   */
  protected $customService;

  /**
   * Constructs a RestOutputController object.
   *
   * @param \Drupal\dependency_injection_exercise\CustomService $customService
   *   The custom service.
   */
  public function __construct(CustomService $customService) {
    $this->customService = $customService;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('dependency_injection_exercise.custom_service')
    );
  }

  /**
   * Displays the photos.
   *
   * @return array[]
   *   A renderable array representing the photos.
   */
  public function showPhotos(): array {
    return $this->customService->renderedBlock();
  }

}
