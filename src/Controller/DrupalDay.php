<?php

namespace Drupal\drupalday\Controller;

use Drupal\Core\Controller\ControllerBase;

class DrupalDay extends ControllerBase {

  public function getLandingPage() {
    return [
      '#type' => 'markup',
      '#markup' => t('Hello World!')
    ];
  }
}
