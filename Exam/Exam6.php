<?php
$son = 13;
for ($i = 1; $i <= $son; $i++) {
    $isPrime = true;
    if ($i == 1) $isPrime = false;
    for ($j = 2; $j < $i && $isPrime; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
        }
    }
    if ($isPrime) print $i . "\n";
}