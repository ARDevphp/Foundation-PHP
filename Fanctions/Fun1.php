<?php
function isPrime($k)
{
    $n = 0;
    for ($i = 1; $i <= $k; $i++) {
        $isPrime = true;
        if ($i == 1) $isPrime = false;
        for ($j = 2; $j < $i && $isPrime; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
            }
        }
        if ($isPrime) {
            $n++;
        }

    }
    echo $n;
}

$aTop = 9;
isPrime($aTop);