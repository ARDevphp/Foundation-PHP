<?php
$a = 12345;
$b = 0;
$sum = 0;
for (; $a != 0;) {
    $b = $a % 10;
    $sum = $sum * 10 + $b;
    $a = $a / 10;
}
echo $sum;