<?php

namespace Drupal\modulo_prueba\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for modulo_prueba routes.
 */
class ModuloPruebaController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
