<?php
$array = [2,3,4,3,5,6,7,2];
$k = 3;
$l = 7;
$sum = 0;
$count = 0;
for ($i = 0; $i <= $k; $i++) {
    $sum += $array[$i];//9
    $count++;
}
for ($i = $l; $i <= count($array)-1; $i++) {
    $sum += $array[$i];//2
    $count++;
}
echo $sum /= $count;

