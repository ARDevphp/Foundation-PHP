<?php
function digitCount(int $k): int
{
    $count = 0;
    while ($k > 1) {
        $k /= 10;
        echo $k;
        $count++;
    }
    return $count;
}

echo digitCount(1230);