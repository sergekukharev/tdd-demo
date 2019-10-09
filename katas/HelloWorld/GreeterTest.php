<?php

namespace Sk\TddDemo\HelloWorld;

use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    private $greeter;

    public function setUp(): void
    {
        $this->greeter = new Greeter();
    }

    public function testGreeterGreetsTheWorld(): void
    {
        self::assertEquals('Hello, World!', $this->greeter->greet());
    }

    public function testGreeterGreetsByName(): void
    {
        self::assertEquals('Hello, Sergei!', $this->greeter->greet('Sergei'));
    }

    public function testTrimsInput(): void
    {
        self::assertEquals('Hello, Sergei!', $this->greeter->greet("\t   \n   Sergei  \n\n \t"));
    }

    /**
     * @dataProvider provideWeirdNames
     */
    public function testNormalizesNames(): void
    {
        self::assertEquals(
            'Hello, Sergei Kukhariev!',
            $this->greeter->greet('sERGEi KUKHARieV')
        );
    }

    public function provideWeirdNames(): array
    {
        return [
            ['sergei'],
            ['sERgEi'],
            ['sERGEi KUKHARieV'],
        ];
    }
}
