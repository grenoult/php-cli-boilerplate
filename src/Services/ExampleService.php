<?php

namespace src\Services;

class ExampleService
{
    public function execute(string $name): string
    {
        return "Hello $name!";
    }
}
