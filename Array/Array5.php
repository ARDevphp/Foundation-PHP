<?php
$n = 8;
$f = 1;
$fn = 1;
for ($i = 1; $i <= $n; $i++) {
    $sum[$i] = $f + $fn;
    $fn = $f;
    $f = $sum[$i];
    echo $sum[$i] . "\t";
}