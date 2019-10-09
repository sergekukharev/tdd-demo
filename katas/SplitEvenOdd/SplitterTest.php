<?php

namespace Sk\TddDemo\SplitEvenOdd;

use PHPUnit\Framework\TestCase;

final class SplitterTest extends TestCase
{
    private $splitter;

    public function setUp(): void
    {
        $this->splitter = new Splitter();
    }

    public function testSplitsEmptyIntoEmptyLists(): void
    {
        [$even, $odd] = $this->splitter->split([]);

        self::assertEquals([], $even);
        self::assertEquals([], $odd);
    }

    public function testCaseOfSingleElement(): void
    {
        $input = [1];

        [$even, $odd] = $this->splitter->split($input);

        self::assertEquals([], $even);
        self::assertEquals([1], $odd);
    }

    public function testCaseOfMultipleOddElements(): void
    {
        $input = [1, 7, 13];

        [$even, $odd] = $this->splitter->split($input);

        self::assertEquals([], $even);
        self::assertEquals([1, 7, 13], $odd);
    }

    public function testSplitsOddAndEven(): void
    {
        $input = [2, 7, 13, 4, -10, 5];

        [$even, $odd] = $this->splitter->split($input);

        self::assertEquals([7, 13, 5], $odd);
        self::assertEquals([2, 4, -10], $even);
    }
}
