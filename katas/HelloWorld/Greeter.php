<?php

namespace Sk\TddDemo\HelloWorld;

final class Greeter
{
    public function greet(string $name = 'world'): string
    {
        return sprintf('Hello, %s!', ucwords(strtolower(trim($name))));
    }
}
