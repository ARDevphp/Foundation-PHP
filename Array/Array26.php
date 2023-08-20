<?php
$array = [2,4,2,3,2,4,5,6,8,4];
$max = $array[1];
for ($i = 1; $i < count($array); $i+=2) {
    if ($max < $array[$i]) {
        $max = $array[$i];
    }
}
echo $max;