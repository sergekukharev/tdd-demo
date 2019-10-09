<?php

namespace Sk\TddDemo;

use PHPUnit\Framework\TestCase;
use Sk\TddDemo\HelloWorld\Greeter;

final class DummyTest extends TestCase
{
	public function testPhpunitWorks(): void
	{
		self::assertTrue(true);
	}

	public function testAutoloadingWorks(): void
	{
		$greeter = new Greeter();

		self::assertEquals(new Greeter(), $greeter);
	}
}
