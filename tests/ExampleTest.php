<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    /**
     * @param string $name
     * @param string $expectedResult
     * @return void
     * @dataProvider executeProvider
     */
    public function testExecute(string $name, string $expectedResult): void
    {
        $exampleService = new \src\Services\ExampleService();
        $result = $exampleService->execute($name);
        $this->assertSame($expectedResult, $result);
    }

    public function executeProvider(): array
    {
        return [
            ['there', 'Hello there!'],
        ];
    }
}
