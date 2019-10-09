<?php

namespace Sk\TddDemo\BalancedBrackets;

use PHPUnit\Framework\TestCase;

final class BracketBalanceCheckerTest extends TestCase
{
    private $checker;

    public function setUp(): void
    {
        $this->checker = new BracketBalanceChecker();
    }

    public function testEmptyStringIsValid(): void
    {
        self::assertTrue($this->checker->isValid(''));
    }

    public function testCheckSimpleCase(): void
    {
        self::assertTrue($this->checker->isValid('[]'));
    }

    public function testHasToBeBalancedSinceTheBeginning(): void
    {
        self::assertFalse($this->checker->isValid(']'));
    }

    public function testHasToHaveSameAmountOfOpeningAndClosingBrackets(): void
    {
        self::assertFalse($this->checker->isValid('[]['));
    }

    public function testHasToRespectTheOrder(): void
    {
        self::assertFalse($this->checker->isValid(']['));
    }

    public function testComplexCase(): void
    {
        $input = '[123 + 35] * [1 + 2 * [34 - 17]]';

        self::assertTrue($this->checker->isValid($input));
    }

    public function testCanWorkWithParentheses(): void
    {
        $input = '(123 + 35) * (1 + 2 * (34 - 17))';

        self::assertTrue($this->checker->isValid($input));
    }

    public function testCanDetectInvalidParentheses(): void
    {
        self::assertFalse($this->checker->isValid('(()'));
    }

    public function testCanHandleMixedBrackets(): void
    {
        $input = '(123 + 35) * [1 + 2 * (34 - 17)]';

        self::assertTrue($this->checker->isValid($input));
    }
}
