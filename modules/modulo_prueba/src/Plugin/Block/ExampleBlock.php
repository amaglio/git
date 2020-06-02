<?php

namespace Drupal\modulo_prueba\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "modulo_prueba_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("modulo_prueba")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
