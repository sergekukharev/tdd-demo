<?php

namespace Sk\TddDemo\SplitEvenOdd;

final class Splitter
{
    /**
     * @param array $input
     * @return array[]
     */
    public function split(array $input): array
    {
        $even = [];
        $odd = [];

        foreach ($input as $number) {
            if ($number % 2 === 0) {
                $even[] = $number;
            } else {
                $odd[] = $number;
            }
        }

        return [$even, $odd];
    }
}
