<?php
$array = [2, 4, 3, 6, 7, 12, 5];
$indexLeft = 0;
$indexH = count($array)-1;
while (true) {
    if ($indexLeft <= $indexH) {
        echo $array[$indexLeft++] . "\t";
    }else{
        break;
    }
    if ($indexH >= $indexLeft) {
        echo $array[$indexH] . "\t";
        $indexH--;
    }else{
        break;
    }
}
