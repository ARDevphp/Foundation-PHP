<?php
$x = 7;
$y = 7;
$sum = 0;
if ($x < $y) {
    $sum = ($x + $y) / 2;
    $y = ($y * $x) * 2;
    echo $sum . " " . $y;
} else if ($x > $y) {
    $sum = ($y * $x) * 2;
    $y = ($y + $x) / 2;
    echo $sum . " " . $y;
} else {
    echo $x . " " . $y;
}