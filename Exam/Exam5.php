<?php

$n = 10000;
for ($i = 1; $i <= $n; $i++) {
    if (perfect($i))
        echo $i . "\t";
}

function perfect($num)
{
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum = $sum + $i;
        }
    }
    if ($sum == $num) return true;
    else return false;
}