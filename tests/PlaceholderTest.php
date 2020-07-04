<?php

declare(strict_types=1);

namespace Dan\Skeleton;

use PHPUnit\Framework\TestCase;

class PlaceholderTest extends TestCase {
  public function test_it_works(): void {
    $placeholder = new Placeholder();
    self::assertInstanceOf(Placeholder::class, $placeholder);
  }
}
