<?php

declare(strict_types=1);

namespace Drupal\Tests\prueba\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests that the prueba UI pages are reachable.
 *
 * @group prueba_ui
 */
class UiPageTest extends BrowserTestBase {

   /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Create an article content type that we will use for testing.
    $type = $this->container->get('entity_type.manager')->getStorage('node_type')
      ->create([
        'type' => 'article',
        'name' => 'Article',
      ]);
    $type->save();
    $this->container->get('router.builder')->rebuild();
  }

}
