<?php
declare(strict_types=1);

$a = 10;
$b = 20;

var_dump($a === $b);

$sayHello = "Hello World!";
$findIndex = strpos($sayHello, 'H');
$result = $findIndex === false
    ? 'H not found'
    : sprintf('H found at index %d', $findIndex);
var_dump($result);