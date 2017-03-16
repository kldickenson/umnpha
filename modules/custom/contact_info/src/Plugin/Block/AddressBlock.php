<?php

/**
 * @file
 * Contains \Drupal\contact_info\Plugin\Block/AddressBlock.
 */

namespace Drupal\contact_info\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with an address.
 *
 * @Block(
 *   id = "address",
 *   admin_label = @Translation("Address"),
 * )
 */
class AddressBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Grab contact info data.
    $contact_info = \Drupal::config('contact_info.setup');

    // Set up variables to send to the theme function.
    $variables = contact_info_create_address($contact_info);

    return $variables;
  }

}
