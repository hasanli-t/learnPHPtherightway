<?php

declare(strict_types=1);

$array1 = [1, 2, 3, 4];

$array2 = array_map(function(int| float $element): int|float {
    return $element * 2;
}, $array1);

echo '<pre>';
echo 'array1: ';
print_r($array1);
echo '<br /><hr />';
echo 'array2: ';
print_r($array2);

echo '<br /><hr />';

$array3 = [-1, -2, -3, -4];

$updateArray3 = function(int|float $element): int|float
{
    return $element * 2;
};

$array4 = array_map($updateArray3, $array3);

echo 'array3: ';
print_r($array3);
echo '<br /><hr />';
echo 'array4: ';
print_r($array4);

echo '<br /><hr />';

$array5 = [2, 3, 4, 5, 6];

function update(int|float $element): int|float
{
    return $element * 2;
}

$array6 = array_map('update', $array5);

echo 'array5: ';
print_r($array5);
echo '<br /><hr />';
echo 'array6: ';
print_r($array6);
echo '</pre>';