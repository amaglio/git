<?php

namespace Drupal\carrito\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for carrito routes.
 */
class CarritoController extends ControllerBase {

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
