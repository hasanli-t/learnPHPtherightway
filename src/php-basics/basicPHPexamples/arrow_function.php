<?php

declare(strict_types=1);

$array1 = [1, 2, 3, 4, 5];

$array2 = array_map(fn(int|float $number): int|float => $number * $number, $array1);

echo '<pre>';

echo 'array1: ';
print_r($array1);
echo '<br /><hr />';
echo 'array2: ';
print_r($array2);

echo '</pre>';