<?php
$n = 0;
$number = 10000;//berilgan son
$i = 1;
$s1 = 0;
$s2 = 0;
for ($k = 1; $k <= $number; $k++) {
    $n = $k;
    while ($i < $n) {
        if ($n % $i == 0) {
            $s1 = $s1 + $i;
        }
        $i++;
    }
    $i = 1;
    if ($s1 == $n) {
        continue;
    }
    while ($i < $s1) {
        if ($s1 % $i == 0) {
            $s2 = $s2 + $i;
        }
        $i++;
    }
    if ($n == $s2) {
        echo $n . "\t"; //fibonacii
    }
    $s1 = 0;
    $s2 = 0;
}