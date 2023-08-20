<?php
$array = [3,4,5,6,7,8,3];
$k = 1;
$l = 5;
$sum = 0;
$count = 0;
for ($i = $k; $i < $l; $i++) {
    $sum += $array[$i];
    $count++;
}
$sum /= $count;
echo $sum;