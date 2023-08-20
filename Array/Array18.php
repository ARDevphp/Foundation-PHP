<?php
$array = [8,7,9,6,5,3,4];
$sum = count($array);
for ($i = 0; $i < count($array)-1; $i++) {
    if ($array[$i] < $sum) {
        echo $array[$i];
        break;
    }
}
