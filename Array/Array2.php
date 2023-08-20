<?php
$n = 5;
$sum = 1;
for ($i = 1; $i <= $n; $i++) {
    $array[$i] = $sum *= 2;
    echo $array[$i] . "\t";
}
