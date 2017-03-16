<?php

/**
 * @file
 * Contains \Drupal\contact_info\Plugin\Block/PhoneBlock.
 */

namespace Drupal\contact_info\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with an phone number.
 *
 * @Block(
 *   id = "phone",
 *   admin_label = @Translation("Phone"),
 * )
 */
class PhoneBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Grab contact info data.
    $contact_info = \Drupal::config('contact_info.setup');

    return contact_info_create_phone($contact_info);
  }

}
