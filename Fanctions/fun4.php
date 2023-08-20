<?php
function digitC(int $k)//256
{
    $sum = 0;
    $count = 0;
    while ($k > 1) {
        $sum = $k % 10;//6..5..2..
        $k /= 10;
        $count++;
    }
    echo $count;
}

digitC(1232);