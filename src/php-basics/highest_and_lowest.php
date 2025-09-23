<?php

declare(strict_types=1);

// input "1 2 3 4 5" -> output "5 1"

function highAndLow(string $numbers): string {
  $digits = explode(" ", $numbers);
  print_r($digits);
  
  $maxDigit = (string) max($digits);
  $minDigit = (string) min($digits);
  
  return "$maxDigit $minDigit"; // your code here
}