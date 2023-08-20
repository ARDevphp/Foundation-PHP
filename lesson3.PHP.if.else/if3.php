<?php
$sum = 8;

if ($sum > 0) {
    $sum++;
} else if ($sum == 0) {
    $sum = 10;
} else {
    $sum -= 2;
}
echo $sum;