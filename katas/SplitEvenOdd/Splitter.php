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
        $res = [[], []];

        foreach ($input as $number) {
            $res[$number % 2][] = $number;
        }

        return $res;
    }
}
