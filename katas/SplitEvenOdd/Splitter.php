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
            ($number % 2) ? $odd[] = $number : $even[] = $number;
        }

        return [$even, $odd];
    }
}
