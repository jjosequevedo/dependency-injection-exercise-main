<?php

namespace Drupal\dependency_injection_exercise;

use Drupal\Core\Breadcrumb\Breadcrumb;
use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Link;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\node\NodeInterface;

/**
 * Provides a breadcrumb builder for articles.
 */
class CustomBreadcrumbBuilder implements BreadcrumbBuilderInterface {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    return $route_match->getRouteName() === 'dependency_injection_exercise.rest_output_controller_photos';
  }

  /**
   * {@inheritdoc}
   */
  public function build(RouteMatchInterface $route_match) {
    $breadcrumb = new Breadcrumb();

    // Home.
    $links[] = Link::createFromRoute($this->t('Home'), '<front>');

    // Dropsolid.
    $links[] = Link::createFromRoute($this->t('Dropsolid'), '<none>');

    // Example.
    $links[] = Link::createFromRoute($this->t('Example'), '<none>');

    // Photos.
    $links[] = Link::createFromRoute($this->t('Photos'), '<none>');

    $breadcrumb->setLinks($links);

    return $breadcrumb;
  }

}
