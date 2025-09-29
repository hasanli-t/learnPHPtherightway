<?php

declare(strict_types=1);

$count = 1;
$num1 = 1;
$num2 = 1;

while($count <= 100) {
    $num1 = $num1 * $num2;
    echo $num1 . '< /br>';
    $count *= 2;
    $num1 += 2;
    $num2 += 2;

}

