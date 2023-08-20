<?php
$array = [2,3,4,5,1,8,1];
$min = $array[0];
for ($i = 1; $i < count($array)-1; $i++) {
    if ($array[$i] > $array[$i-1] && $array[$i] > $array[$i+1]) {
        $min = $array[$i];
    }
}
echo $min;