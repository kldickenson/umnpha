<?php

namespace Drupal\Tests\eck\Functional;

use Drupal\Core\Url;
use Drupal\eck\Entity\EckEntity;
use Drupal\eck\Entity\EckEntityType;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\Tests\BrowserTestBase;

/**
 * Test ECK's navigational structure. This includes routing, paths, breadcrumbs
 * and page titles.
 *
 * @group eck
 */
class NavigationalStructureTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['eck', 'block', 'field'];

  private $baseCrumbs = [
    'Home',
    'Administration',
  ];

  /** @var string */
  private $entityTypeMachineName;
  /** @var string */
  private $entityTypeLabel;
  /** @var string */
  private $entityBundleMachineName;
  /** @var string */
  private $entityBundleLabel;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
    $user = $this->drupalCreateUser([
      'administer eck entities',
      'administer eck entity bundles',
      'administer eck entity types',
      'bypass eck entity access',
      'access administration pages',
    ]);
    $this->drupalLogin($user);

    $this->entityTypeMachineName = strtolower($this->randomMachineName());
    $this->entityTypeLabel = strtolower($this->randomMachineName());
    $this->createEntityType($this->entityTypeMachineName, $this->entityTypeLabel);

    $this->entityBundleMachineName = strtolower($this->randomMachineName());
    $this->entityBundleLabel = strtolower($this->entityBundleMachineName);
    $this->createEntityBundle($this->entityTypeMachineName, $this->entityBundleMachineName, $this->entityBundleLabel);

    $this->placeBlock('system_breadcrumb_block');
    $this->placeBlock('page_title_block');
  }

  /**
   * Creates an entity type.
   *
   * @param $entityTypeId
   *   The entity type id.
   * @param $entityTypeLabel
   *   The entity type label.
   */
  protected function createEntityType($entityTypeId, $entityTypeLabel) {
    $entityType = EckEntityType::create([
      'id' => $entityTypeId,
      'label' => $entityTypeLabel
    ]);
    $entityType->save();
  }

  /**
   * Creates a bundle on an entity type.
   *
   * @param $entityTypeId
   *   The id of the entity type to add the bundle to.
   * @param $entityBundleMachineName
   *   The machine name of the bundle to create.
   * @param $entityBundleName
   *   The label of the bundle to create.
   */
  protected function createEntityBundle($entityTypeId, $entityBundleMachineName, $entityBundleName) {
    $entityBundle = \Drupal::entityTypeManager()
      ->getStorage($entityTypeId . '_type')
      ->create([
        'type' => $entityBundleMachineName,
        'name' => $entityBundleName
      ]);
    $entityBundle->save();
  }

  /**
   * Retrieves the entity storage handler.
   *
   * @return \Drupal\Core\Entity\EntityStorageInterface
   *   The entity storage handler.
   */
  private function getEntityStorageHandler() {
    return \Drupal::entityTypeManager()
      ->getStorage($this->entityTypeMachineName);
  }

  /**
   * Asserts that the page on a given route contains all the elements we expect.
   *
   * @param $route
   *   The route to test.
   * @param $routeArguments
   *   Arguments for the route to test.
   * @param $expectedUrl
   *   The expected url.
   * @param $expectedTitle
   *   The expected title.
   * @param $crumbs
   *   The expected breadcrumbs after the base crumbs.
   */
  private function assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs = []) {
    $url = Url::fromRoute($route, $routeArguments);

    self::assertEquals($expectedUrl, $url->getInternalPath());
    $this->drupalGet($url);
    $this->assertTitleEquals($expectedTitle);
    $this->assertBreadcrumbsVisible(array_merge($this->baseCrumbs, $crumbs));
  }

  /**
   * Asserts that the title of a page contains a given value.
   *
   * @param string $expectedTitle
   *   The expected title.
   */
  private function assertTitleEquals($expectedTitle) {
    $titleElement = $this->getSession()
      ->getPage()
      ->find('css', '.page-title');
    $this->assertEquals($expectedTitle, $titleElement->getText());
  }

  /**
   * Asserts that the given breadcrumbs are visible.
   *
   * @param string[] $expectedBreadcrumbs
   *   The expected breadcrumbs.
   */
  private function assertBreadcrumbsVisible(array $expectedBreadcrumbs) {
    $breadcrumbs = $this->getSession()
      ->getPage()
      ->findAll('css', '.breadcrumb a');

    $actualCrumbs = [];
    do {
      $actualCrumbs[] = array_shift($breadcrumbs)->getText();
    } while (!empty($breadcrumbs));

    self::assertEquals($expectedBreadcrumbs, $actualCrumbs);
  }

  /**
   * @test
   */
  public function entityTypeList() {
    $route = 'eck.entity_type.list';
    $routeArguments = [];
    $expectedUrl = 'admin/structure/eck';
    $expectedTitle = 'ECK Entity Types';

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, ['Structure']);
  }

  /**
   * @test
   */
  public function entityTypeAdd() {
    $routeArguments = [];
    $route = 'eck.entity_type.add';
    $expectedUrl = 'admin/structure/eck/add';
    $expectedTitle = 'Add entity type';
    $crumbs = [
      'Structure',
      'ECK Entity Types'
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityTypeEdit() {
    $route = 'entity.eck_entity_type.edit_form';
    $routeArguments = ['eck_entity_type' => $this->entityTypeMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}";
    $expectedTitle = 'Edit entity type';
    $crumbs = [
      'Structure',
      'ECK Entity Types'
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityTypeDelete() {
    $route = 'entity.eck_entity_type.delete_form';
    $routeArguments = ['eck_entity_type' => $this->entityTypeMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/delete";
    $expectedTitle = "Are you sure you want to delete entity type {$this->entityTypeLabel}?";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type"
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
    $this->assertSession()->pageTextContains("Configuration deletions The listed configuration will be deleted.{$this->entityTypeLabel} type");
    $this->assertSession()->pageTextContains($this->entityBundleLabel);
  }

  /**
   * @test
   */
  public function entityTypeDeleteWithMultipleBundles() {
    $additional_bundle_name = strtolower($this->randomMachineName());
    $additional_bundle_label = strtolower($this->randomMachineName());
    // Create a randomly named bundle.
    $this->createEntityBundle($this->entityTypeMachineName, $additional_bundle_name, $additional_bundle_label);

    $route = 'entity.eck_entity_type.delete_form';
    $routeArguments = ['eck_entity_type' => $this->entityTypeMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/delete";
    $expectedTitle = "Are you sure you want to delete entity type {$this->entityTypeLabel}?";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type"
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);

    $this->assertSession()->pageTextContains("Configuration deletions The listed configuration will be deleted.{$this->entityTypeLabel} type");
    $this->assertSession()->pageTextContains($additional_bundle_label);
    $this->assertSession()->pageTextContains($this->entityBundleLabel);
  }

  /**
   * @test
   */
  public function entityTypeDeleteWithMatchingBundle() {
    $this->createEntityBundle($this->entityTypeMachineName, $this->entityTypeMachineName, $this->entityTypeLabel);

    \Drupal::entityTypeManager()
      ->getStorage($this->entityTypeMachineName . '_type')
      ->load($this->entityBundleMachineName)
      ->delete();

    $this->entityBundleMachineName = $this->entityTypeMachineName;
    $this->entityBundleLabel = $this->entityTypeLabel;

    $route = 'entity.eck_entity_type.delete_form';
    $routeArguments = ['eck_entity_type' => $this->entityTypeMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/delete";
    $expectedTitle = "Are you sure you want to delete entity type {$this->entityTypeLabel}?";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type"
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
    $this->assertSession()->pageTextContains("This action cannot be undone.");

    // Delete the entity.
    $this->submitForm([], 'Delete entity type');

    $this->assertSession()->statusCodeEquals(200);

    // Try to load the deleted entity.
    $entity_type = \Drupal::entityTypeManager()
      ->getStorage($this->entityTypeMachineName)
      ->load($this->entityTypeMachineName);

    // Make sure the entity is deleted.
    $this->assertNull($entity_type);

    $this->entityTypeList();
  }

  /**
   * @test
   */
  public function entityTypeDeleteWithField() {
    // Delete the original bundle.
    \Drupal::entityTypeManager()
      ->getStorage($this->entityTypeMachineName . '_type')
      ->load($this->entityBundleMachineName)
      ->delete();

    // Create a bundle with matching name.
    $this->entityBundleMachineName = $this->entityTypeMachineName;
    $this->entityBundleLabel = $this->entityTypeLabel;
    $this->createEntityBundle($this->entityTypeMachineName, $this->entityBundleMachineName, $this->entityBundleLabel);

    FieldStorageConfig::create([
      'entity_type' => $this->entityTypeMachineName,
      'field_name' => 'field_decimal',
      'type' => 'decimal',
    ])->save();
    FieldConfig::create([
      'entity_type' => $this->entityTypeMachineName,
      'field_name' => 'field_decimal',
      'bundle' => $this->entityBundleMachineName,
    ])->save();

    $route = 'entity.eck_entity_type.delete_form';
    $routeArguments = ['eck_entity_type' => $this->entityTypeMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/delete";
    $expectedTitle = "Are you sure you want to delete entity type {$this->entityTypeLabel}?";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type"
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
    $this->assertSession()->pageTextContains("This action cannot be undone.");
    $this->assertSession()->pageTextContains("Configuration deletions The listed configuration will be deleted.{$this->entityTypeLabel} type{$this->entityTypeLabel}Fieldfield_decimal");

    // Delete the entity.
    $this->submitForm([], 'Delete entity type');

    $this->assertSession()->statusCodeEquals(200);

    // Try to load the deleted entity.
    $entity_type = \Drupal::entityTypeManager()
      ->getStorage($this->entityTypeMachineName)
      ->load($this->entityTypeMachineName);

    // Make sure the entity is deleted.
    $this->assertNull($entity_type);

    $this->entityTypeList();
  }

  /**
   * @test
   */
  public function entityTypeDeleteWithContent() {
    $field_machine_name = strtolower($this->randomMachineName());
    // Create a field.
    FieldStorageConfig::create([
      'entity_type'   => $this->entityTypeMachineName,
      'field_name'    => $field_machine_name,
      'type'          => 'decimal',
    ])->save();
    FieldConfig::create([
      'entity_type'   => $this->entityTypeMachineName,
      'field_name'    => $field_machine_name,
      'bundle'        => $this->entityBundleMachineName,
    ])->save();

    // Create an entity.
    \Drupal::entityTypeManager()
      ->getStorage($this->entityTypeMachineName)
      ->create([
        'type'                => $this->entityBundleMachineName,
        $field_machine_name   => random_int(1, 1000),
      ])->save();

    $route = 'entity.eck_entity_type.delete_form';
    $routeArguments = ['eck_entity_type' => $this->entityTypeMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/delete";
    $expectedTitle = "Delete entity type";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type"
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
    $this->assertSession()->pageTextContains("There is 1 {$this->entityTypeLabel} entity. You can not remove this entity type until you have removed all of the {$this->entityTypeLabel} entities.");

    // Create a second entity.
    \Drupal::entityTypeManager()
      ->getStorage($this->entityTypeMachineName)
      ->create([
        'type'                => $this->entityBundleMachineName,
        $field_machine_name   => random_int(1, 1000),
      ])->save();

    $route = 'entity.eck_entity_type.delete_form';
    $routeArguments = ['eck_entity_type' => $this->entityTypeMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/delete";
    $expectedTitle = "Delete entity type";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type"
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
    $this->assertSession()->pageTextContains("There are 2 {$this->entityTypeLabel} entities. You may not remove {$this->entityTypeLabel} until you have removed all of the {$this->entityTypeLabel} entities.");
  }

  /**
   * @test
   */
  public function entityList() {
    $route = "eck.entity.{$this->entityTypeMachineName}.list";
    $routeArguments = [];
    $expectedUrl = "admin/content/{$this->entityTypeMachineName}";
    $expectedTitle = ucfirst("{$this->entityTypeLabel} content");
    $crumbs = ['Content'];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityAddPage() {
    $route = 'eck.entity.add_page';
    $routeArguments = ['eck_entity_type' => $this->entityTypeMachineName];
    $expectedUrl = "admin/content/{$this->entityTypeMachineName}/add";
    $expectedTitle = "Add " . $this->entityTypeLabel . " content";
    $crumbs = [
      'Content',
      ucfirst("{$this->entityTypeLabel} content")
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityAdd() {
    $route = 'eck.entity.add';
    $routeArguments = [
      'eck_entity_type' => $this->entityTypeMachineName,
      'eck_entity_bundle' => $this->entityBundleMachineName
    ];
    $expectedUrl = "admin/content/{$this->entityTypeMachineName}/add/{$this->entityBundleMachineName}";
    $expectedTitle = "Add {$this->entityBundleMachineName} content";
    $crumbs = [
      'Content',
      ucfirst("{$this->entityTypeLabel} content"),
      "Add {$this->entityTypeLabel} content",
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityView() {
    $entity = $this->getEntityStorageHandler()
      ->create(['type' => $this->entityBundleMachineName]);
    $entity->save();

    $route = "entity.{$this->entityTypeMachineName}.canonical";
    $routeArguments = [$this->entityTypeMachineName => $entity->id()];
    $expectedUrl = "{$this->entityTypeMachineName}/{$entity->id()}";
    $expectedTitle = "$this->entityTypeLabel";
    $this->baseCrumbs = ["Home"];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle);
  }

  /**
   * @test
   */
  public function entityEdit() {
    $entity = $this->getEntityStorageHandler()
      ->create(['type' => $this->entityBundleMachineName]);
    $entity->save();

    $route = "entity.{$this->entityTypeMachineName}.edit_form";
    $routeArguments = [$this->entityTypeMachineName => $entity->id()];
    $expectedUrl = "{$this->entityTypeMachineName}/{$entity->id()}/edit";
    $expectedTitle = "Edit {$this->entityTypeLabel}";
    $this->baseCrumbs = ['Home'];
    $crumbs = [
      $this->entityTypeLabel,
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityDelete() {
    $entity = $this->getEntityStorageHandler()
      ->create(['type' => $this->entityBundleMachineName]);
    $entity->save();

    $route = "entity.{$this->entityTypeMachineName}.delete_form";
    $routeArguments = [$this->entityTypeMachineName => $entity->id()];
    $expectedUrl = "{$this->entityTypeMachineName}/{$entity->id()}/delete";
    $expectedTitle = "Are you sure you want to delete entity ?";
    $this->baseCrumbs = ['Home'];
    $crumbs = [
      $this->entityTypeLabel,
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityBundleList() {
    $route = "eck.entity.{$this->entityTypeMachineName}_type.list";
    $routeArguments = [];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/bundles";
    $expectedTitle = ucfirst("{$this->entityTypeLabel} bundles");
    $crumbs = ['Structure', "ECK Entity Types", "Edit entity type"];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityBundleAdd() {
    $route = "eck.entity.{$this->entityTypeMachineName}_type.add";
    $routeArguments = [];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/bundles/add";
    $expectedTitle = "Add {$this->entityTypeLabel} bundle";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type",
      ucfirst("{$this->entityTypeLabel} bundles"),
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityBundleEdit() {
    $route = "entity.{$this->entityTypeMachineName}_type.edit_form";
    $routeArguments = ["{$this->entityTypeMachineName}_type" => $this->entityBundleMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/bundles/{$this->entityBundleMachineName}";
    $expectedTitle = "Edit {$this->entityTypeLabel} bundle";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type",
      ucfirst("{$this->entityTypeLabel} bundles"),
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }

  /**
   * @test
   */
  public function entityBundleDelete() {
    $route = "entity.{$this->entityTypeMachineName}_type.delete_form";
    $routeArguments = ["{$this->entityTypeMachineName}_type" => $this->entityBundleMachineName];
    $expectedUrl = "admin/structure/eck/{$this->entityTypeMachineName}/bundles/{$this->entityBundleMachineName}/delete";
    $expectedTitle = "Are you sure you want to delete the entity bundle {$this->entityBundleLabel}?";
    $crumbs = [
      'Structure',
      'ECK Entity Types',
      "Edit entity type",
      ucfirst("{$this->entityTypeLabel} bundles"),
      "Edit {$this->entityTypeLabel} bundle",
    ];

    $this->assertCorrectPageOnRoute($route, $routeArguments, $expectedUrl, $expectedTitle, $crumbs);
  }
}
