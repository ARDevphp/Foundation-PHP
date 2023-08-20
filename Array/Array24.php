<?php
$array = [-2,3,-4,5,-1,3,-4];
$manfiy = 0;
$musbat = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > 0) {
        $musbat++;
        $manfiy = 1;
        if ($musbat == 2){
            echo $array[$i];
        }
        $manfiy--;
    }
    if ($array[$i] < 0) {
        $manfiy++;
        $musbat = 1;
        if ($manfiy == 2) {
            echo $array[$i];
        }
        $musbat--;
    }
}
