<?php


namespace Sk\TddDemo\BalancedBrackets;


final class BracketBalanceChecker
{
    public function isValid(string $input): bool
    {
        $counter = 0;
        $length = strlen($input);

        for ($i = 0; $i < $length; $i++) {
            if ($input[$i] === '[') {
                $counter++;
            }

            if ($input[$i] === ']') {
                $counter--;
            }

            if ($counter < 0) {
                return false;
            }
        }

        return $counter === 0;
    }
}
