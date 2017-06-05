<?php

namespace Drupal\compro_custom\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an icon to search on the site.
 *
 * @Block(
 *   id = "search_icon_block",
 *   admin_label = @Translation("Search Icon"),
 * )
 */
class SearchIconBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Render array that returns icon.
    return array(
      'search_icon' => array(
        '#markup' => '<span class="icon magnifying-glass"></span>',
      ),
    );
  }

}
