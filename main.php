<?php

require('./vendor/autoload.php');

$exampleService = new \src\Services\ExampleService();

echo $exampleService->execute('World').PHP_EOL;
