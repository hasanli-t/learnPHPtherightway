<?php
  
function DNA_strand(string $s): string {
    $bases = str_split($s);
    $complement = [];
    
    foreach ($bases as $base) {
        if ($base === 'A') {
            $complement[] = 'T';
        } elseif ($base === 'T') {
            $complement[] = 'A';
        } elseif ($base === 'G') {
            $complement[] = 'C';
        } else { // $base === 'C'
            $complement[] = 'G';
        }
    }
    
    return implode('', $complement);
}

echo (DNA_strand('ACTG'));

// simplest way: 
// return strtr($s, 'ATGC', 'TACG');