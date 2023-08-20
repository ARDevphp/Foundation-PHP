<?php
$n = 9;
$a = 1;
$b = 1;
$array[0] = $a;
$array[1] = $b;
$sum = $b;

for ($i = 2; $i <= $n; $i++) {
    $array[$i] = $sum;
    $sum += $array[$i-1];
    echo "[" . $sum . "]\t";
}