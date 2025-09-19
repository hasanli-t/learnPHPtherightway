<?php 

declare(strict_types=1);

// Gauss formel with for loop

$summ = 0;

for($i = 1; $i <= 100; $i++)
{
    $summ += $i;
}

echo sprintf('Gauss formel with for loop. The sum is equal: %d', $summ);