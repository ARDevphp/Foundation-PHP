<?php
$n = 123459;
$sum1 = 0;
$sum = 0;
$count = 0;
while ($n > 1) {
    $sum1 = $n % 10;
    $n /= 10;
    $count++;
}
echo $sum1 . "\n";
echo $count;