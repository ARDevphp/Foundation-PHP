<?php
$array = [1, 4, 5, 1, 2, 8, 3];
$k = 2;
$l = 5;
$sum = 0;
for ($i = $k; $i < $l; $i++) {
    $sum += $array[$i];
}
echo $sum;
