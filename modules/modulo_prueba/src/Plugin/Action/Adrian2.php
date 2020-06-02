<?php

namespace Drupal\modulo_prueba\Plugin\Action;

use Drupal\Core\Action\ActionBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Removes the "needs review" flag on a migrated news article.
 *
 * @Action(
 *   id = "corriendo",
 *   label = @Translation("LABEL EN ACTION"),
 *   type = "node"
 * )
 */
class Adrian2 extends ActionBase {

  /**
   * {@inheritdoc}
   */
  public function execute($node = NULL) {
    
  }

  /**
   * {@inheritdoc}
   */
  public function access($object, AccountInterface $account = NULL, $return_as_object = FALSE) {
    /** @var \Drupal\node\NodeInterface $object */
    $result = $object->field_news_migration_review->access('edit', $account, TRUE)
      ->andIf($object->access('update', $account, TRUE));

    return $return_as_object ? $result : $result->isAllowed();
  }

}
