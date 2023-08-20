<?php
$n = 35;
$fb = 1;
$fn = 1;
$sum = 0;
$count = 0;
while ($n > 1) {
    $count++;
    $sum = $fb + $fn;//2,3,5,8,13
    $fb = $fn;//1,2,3,5
    $fn = $sum;//2,3,5,8
    if ($n == $sum) {
        echo "Topildi ";
        return $sum;
    } else if ($count > $n) {
        echo "Topilmadi";
        break;
    }
}



