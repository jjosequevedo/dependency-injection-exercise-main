<?php

namespace Drupal\dependency_injection_exercise;

use Drupal\Core\Language\LanguageDefault;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Language\LanguageManager;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\language\ConfigurableLanguageManagerInterface;
use Drupal\language\LanguageNegotiatorInterface;

/**
 * Custom Language Manager service.
 */
class CustomLanguageManager extends LanguageManager implements ConfigurableLanguageManagerInterface {

  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $innerlanguageManager;

  /**
   * Constructs a CustomLanguageManager object.
   *
   * @param \Drupal\Core\Language\LanguageManagerInterface $inner_language_manager
   *   The language manager.
   * @param \Drupal\Core\Language\LanguageDefault $default_language
   *   The language default.
   */
  public function __construct(LanguageManagerInterface $inner_language_manager, LanguageDefault $default_language) {
    parent::__construct($default_language);
    $this->innerlanguageManager = $inner_language_manager;
  }

  /**
   * @inheritDoc
   */
  public static function rebuildServices() {
    // TODO: Implement rebuildServices() method.
  }

  /**
   * @inheritDoc
   */
  public function getNegotiator() {
    // TODO: Implement getNegotiator() method.
  }

  /**
   * @inheritDoc
   */
  public function setNegotiator(LanguageNegotiatorInterface $negotiator) {
    // TODO: Implement setNegotiator() method.
  }

  /**
   * @inheritDoc
   */
  public function getDefinedLanguageTypes() {
    // TODO: Implement getDefinedLanguageTypes() method.
  }

  /**
   * @inheritDoc
   */
  public function saveLanguageTypesConfiguration(array $config) {
    // TODO: Implement saveLanguageTypesConfiguration() method.
  }

  /**
   * @inheritDoc
   */
  public function updateLockedLanguageWeights() {
    // TODO: Implement updateLockedLanguageWeights() method.
  }

  /**
   * @inheritDoc
   */
  public function getLanguageConfigOverride($langcode, $name) {
    // TODO: Implement getLanguageConfigOverride() method.
  }

  /**
   * @inheritDoc
   */
  public function getLanguageConfigOverrideStorage($langcode) {
    // TODO: Implement getLanguageConfigOverrideStorage() method.
  }

  /**
   * @inheritDoc
   */
  public function getStandardLanguageListWithoutConfigured() {
    // TODO: Implement getStandardLanguageListWithoutConfigured() method.
  }

  /**
   * @inheritDoc
   */
  public function getNegotiatedLanguageMethod($type = LanguageInterface::TYPE_INTERFACE) {
    // TODO: Implement getNegotiatedLanguageMethod() method.
  }

}
