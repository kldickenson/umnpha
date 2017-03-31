<?php

/**
 * @file
 * Contains \Drupal\compro_credit\Plugin\Block\CopyrightBlock.
 */

namespace Drupal\compro_credit\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

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
    //External Uri.
    $url = Url::fromUri('https://www.umich.edu',
      array(
        'attributes' => array(
          'class' => array(
            'um-copyright-link',
          ),
        ),
      )
    );
    $external_link = Link::fromTextandUrl(t('The Regents of the University of Michigan'), $url);
    // Render array that returns text for block content.
    return array(
      'copyright' => array(
        '#markup' => '&copy; ' . date('Y') . ' ' .
          $external_link->toString(),
      ),
    );
  }

}
