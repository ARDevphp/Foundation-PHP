<?php
function solution(int $sum, int $p)
{
    $sum1 = $sum;
    $k = 0;
    while ($sum1 < 2 * $sum) {
        $k++;
        $sum1 = $sum1 + $sum1 * $p / 100;
    }
    echo $k . "\t";
    echo $sum1 . "\n";
}

solution(1000, 5);
solution(1000, 7);
solution(1000, 12);
solution(20000, 12);