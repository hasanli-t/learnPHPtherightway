<?php

declare(strict_types=1);

$x = 10;

$sum = function(int|float ...$numbers) use ($x): int|float
{   
    $x *= 2;
    echo 'x= ' . $x . '<br />';

    return array_sum($numbers);
};

echo 'it is just simple anonymous function to calculate sum. Sum is: ' . $sum(1, 2, 3, 4, 5);

echo '<br />';
echo 'x = ' . $x; // output will be 10 even we changed the value in anonymous function.