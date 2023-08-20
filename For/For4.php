<?php
$kon = 20500;
$sum = 0;
$n = 10;
if ($n >= 1 && $n <= 10) {
    for ($i = 1; $i <= $n; $i++) {
        $sum += $kon;
        echo $i . " kg kon = " . $sum . "\n";
    }
} else {
    echo "(n > 0 & n < 10";
}