<?php

declare(strict_types=1);

$sum = function(callable $callable, int|float ...$numbers): int|float
{
    return $callable(array_sum($numbers));
};

echo $sum('update', 1, 2, 3, 4, 5, 6, 7.7);

function update(int|float $element): int|float
{
    return $element * 2;
}