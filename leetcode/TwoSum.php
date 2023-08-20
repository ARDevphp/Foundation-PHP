<?php

$array = [3, 3];
$t = 6;
function twoSum($nums, $target)
{

    for ($i = 0; $i < count($nums) - 1; $i++) {
        if ($nums[$i] + $nums[$i + 1] == $target) {
            return $i . $i + 1;
        }
    }

}

echo twoSum($array, $t);;







