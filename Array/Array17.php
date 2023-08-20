<?php
$array = [3,4,5,2,5,26,8,2,3];
$leftIndex = 0;
$indexH = count($array)-1;
while (true) {
    if ($leftIndex <= $indexH) {
        echo $array[$leftIndex] . "\t";
        $leftIndex++;
    }else{
        break;
    }
    if ($leftIndex <= $indexH) {
        echo $array[$leftIndex] . "\t";
        $leftIndex++;
    }else{
        break;
    }
    if ($indexH >= $leftIndex) {
        echo $array[$indexH] . "\t";
        $indexH--;
    }else {
        break;
    }
    if ($indexH >= $leftIndex) {
        echo $array[$indexH] . "\t";
        $indexH--;
    }else {
        break;
    }
}
