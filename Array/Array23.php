<?php
$array = [2,1,3,1,6,5];
$topT = 0;
$topJ = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {
        $topT = 1;
        $topJ++;
        $topT--;
        if ($topJ == 2) {
            echo $array[$i];
        }
    }
    if ($array[$i] % 2 == 1) {
        $topJ = 1;
        $topT++;
        $topJ--;
        if ($topT == 2) {
            echo $array[$i];
        }
    }
}