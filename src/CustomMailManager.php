<?php

namespace Drupal\dependency_injection_exercise;

use Drupal\Core\Mail\MailManager;

/**
 * Custom Mail Manager service.
 */
class CustomMailManager extends MailManager {

  /**
   * {@inheritdoc}
   */
  public function mail($module, $key, $to, $langcode, $params = [], $reply = NULL, $send = TRUE) {
    return parent::mail($module, $key, "nope@doesntexist.com", $langcode, $params, $reply, $send);
  }

}
