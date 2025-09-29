<?php

declare(strict_types=1);

// input "1 2 3 4 5" -> output "5 1"

function highAndLow(string $numbers): string {
  $digits = explode(" ", $numbers);
  echo '<pre>';
  print_r($digits);
  echo '<br />';
  
  $maxDigit = (string) max($digits);
  $minDigit = (string) min($digits);
  
  return "$maxDigit, $minDigit"; // your code here
}

$highAndLow = highAndLow("-4 3 -14 3 4 2");

echo $highAndLow;