<?php
$array = [3, 1, 4, 5, 2, 8];
$bowIndex = $array[0];
$exoIndex = count($array);
$sum = 0;
$sum1 = 0;

for ($i = 0; $i < count($array) - 1; $i++) {
    if ($bowIndex < $array[$i]) {
        $sum = $array[$i];
        if ($exoIndex > $array[$i]) {
            $sum1 = $array[$i];
        }
        if ($sum <= $sum1) {
            echo $array[$i];
            break;
        }
    }
}
