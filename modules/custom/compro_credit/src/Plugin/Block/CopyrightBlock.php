<?php

/**
 * @file
 * Contains \Drupal\compro_credit\Plugin\Block\CopyrightBlock.
 */

namespace Drupal\compro_credit\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with copyright info.
 *
 * @Block(
 *   id = "copyright_block",
 *   admin_label = @Translation("Copyright Notice"),
 * )
 */
class CopyrightBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    // Render array that returns text for block content.
    return array(
      'copyright' => array(
        '#markup' => '&copy; ' . date('Y') . ' ' .
          t('The Regents of the University of Michigan'),
      ),
    );
  }

}
