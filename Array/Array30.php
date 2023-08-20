<?php
$array = [3, 4, 1, 2, 5, 6, 7, 3];
$min = 0;
for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] < $array[$i - 1] && $array[$i] < $array[$i + 1]) {
        $min = $array[$i];
        break;
    }
}
echo $min;