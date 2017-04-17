<?php

/**
 * @file
 * Contains \Drupal\phoenix_component\Plugin\Block\PhoenixComponentAdd.
 */

namespace Drupal\phoenix_component\Plugin\Block;

use Drupal;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\eck\Entity\EckEntityType;

/**
 * Provides a block with add buttons for each component.
 *
 * @Block(
 *   id = "add_component_block",
 *   admin_label = @Translation("Add Component"),
 * )
 */
class PhoenixComponentAdd extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $render = array();

    $eck_types = EckEntityType::loadMultiple();
    $eckBundleInfo = Drupal::service('eck.entity_type.bundle.info');

    // Build out an array of components to add.
    $component = $eck_types['component'];
    if ($eckBundleInfo->entityTypeHasBundles($component->id())) {
      $bundles = $eckBundleInfo->getAllBundleInfo();
      foreach ($bundles['component'] as $key => $bundle) {
        $url = Url::fromRoute('eck.entity.add',
          array(
            'eck_entity_type' => 'component',
            'eck_entity_bundle' => $key,
          ),
          array(
            'query' => array(
              'destination' => 'admin/content/component',
            ),
            'attributes' => array(
              'class' => array(
                'button',
              ),
            ),
          )
        );

        $render[$key] = array(
          '#markup' => Link::fromTextAndUrl($bundle['label'], $url)->toString(),
        );
      }
    }

    return $render;
  }

}
