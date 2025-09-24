<?php

declare(strict_types=1);

function sum(int|float ...$numbers): int|float 
{
    return array_sum($numbers);
}

$sum = 'sum';

if (is_callable($sum)) {
    echo 'sum is: ' . $sum(1, 2, 3, 4.5);
} else {
    echo 'Not callable';
}

