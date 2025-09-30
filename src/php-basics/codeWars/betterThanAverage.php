<?php
  
function betterThanAverage(array $classPoints, int $yourPoints): bool {
  $averageSum = (array_sum($classPoints) + $yourPoints) / (count($classPoints) + 1);
  
  return $yourPoints > $averageSum ? true : false; // Your code here
}