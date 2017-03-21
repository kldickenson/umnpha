<?php

/**
 * @file
 * Contains \Drupal\email_sign_up\Plugin\Block\EmailSignUp.
 */

namespace Drupal\email_sign_up\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Provides an icon to search on the site.
 *
 * @Block(
 *   id = "email_sign_up",
 *   admin_label = @Translation("Email Sign Up"),
 * )
 */
class EmailSignUp extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    // Grab contact info data.
    $email_sign_up = \Drupal::config('email_sign_up.setup');
    $uri = !empty($email_sign_up->get('link')) ?
      $email_sign_up->get('link') : '/';
    $text = !empty($email_sign_up->get('text')) ?
      $email_sign_up->get('text') : 'Email Sign Up';

    $url = Url::fromUserInput($uri,
      array(
        'attributes' => array(
          'class' => array(
            'email-sign-up-link',
            'button',
          ),
        ),
      )
    );
    $link = Link::fromTextAndUrl($text, $url);
    // Render array that returns icon.
    return array(
      'email_sign_up' => array(
        '#markup' => $link->toString(),
      ),
    );
  }

}
