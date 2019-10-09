<?php


namespace Sk\TddDemo\BalancedBrackets;


final class BracketBalanceChecker
{
    private $stack;

    public function __construct()
    {
        $this->stack = new \SplStack();
    }

    public function isValid(string $input): bool
    {
        $length = strlen($input);

        for ($i = 0; $i < $length; $i++) {
            $current = $input[$i];

            if ($this->isClosingBracket($current) && $this->stack->isEmpty()) {
                return false;
            }

            if ($this->isOpeningBracket($current)) {
                $this->stack->push($current);
            }

            if (!$this->isClosingBracket($current)) {
                continue;
            }

            if ($this->isCorrespondingBracket($this->stack->top(), $current)) {
                $this->stack->pop();
                continue;
            }

            $this->stack->push($current);
        }

        return $this->stack->isEmpty();
    }

    private function isOpeningBracket(string $i): bool
    {
        return $i === '[';
    }

    private function isClosingBracket($current): bool
    {
        return $current === ']';
    }

    private function isCorrespondingBracket($opening, $closing): bool
    {
        if ($closing === ']' && $opening === '[') {
            return true;
        }
        return false;
    }
}


