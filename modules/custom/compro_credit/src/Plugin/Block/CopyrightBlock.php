<?php

namespace Drupal\compro_credit\Plugin\Block;

/**
 * @file
 * Contains \Drupal\compro_credit\Plugin\Block\CopyrightBlock.
 */

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
    // External Uri.
    $url = Url::fromUri(
      'https://www.umich.edu',
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
        '#markup' => '&copy; ' . date('Y') . ' ' . $external_link->toString(),
      ),
      // @see https://creativecommons.org/choose/results-one?license_code=by-nc&amp;jurisdiction=&amp;version=4.0&amp;lang=en
      'cc_license' => array(
        '#markup' => '<br><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/80x15.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.',
      ),
    );
  }

}
