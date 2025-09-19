<?php

declare(strict_types=1);

$count = 1;
$summ = 0;

while($count <= 100) 
{
    $summ += $count;
    $count++;
}

echo sprintf('Summ of 1 + 2 + 3 + ... + 100 = %d', $summ);