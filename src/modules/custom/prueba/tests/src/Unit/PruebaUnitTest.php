<?php

namespace Drupal\Tests\Prueba\Unit;

use Drupal\Tests\UnitTestCase;

/**
*
* @group prueba
*
* @ingroup prueba
*/

class PruebaUnitTest extends UnitTestCase {
 
  public function testClassConstructor()
  {
    $this->assertEquals(123,123);
  }

  /*
  * Prueba de operaciones de matriz
  */
  public function testPushAndPop(): void
  {
    $stack = [];
    $this->assertSame(0, count($stack));

    array_push($stack, 'foo');
    $this->assertSame('foo', $stack[count($stack)-1]);
    $this->assertSame(1, count($stack));

    $this->assertSame('foo', array_pop($stack));
    $this->assertSame(0, count($stack));
  }

  public function testFailure(): void
  {
    $this->assertArrayHasKey('foo', ['foo' => 'baz']);

    $this->assertDirectoryExists('/var/www/html/vendor/phpunit/');

    $stack = [];
    $this->assertEmpty($stack);

  }

}
