<?php

namespace Akak\Hello;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class HelloTest extends TestCase 
{
  public function test()
  {
    $hello = new Hello();

    $this->assertSame('Hello, World', $hello->echo('World'));
  }
}
