<?php
$array = [6, 3, 4, 5, 62, 4, 5, 2];
$min = $array[0];
$min1 = 0;
for ($i = 1; $i < count($array); $i+=2) {
        if ($min > $array[$i]) {
            $min = $array[$i];
        }
}
echo $min;