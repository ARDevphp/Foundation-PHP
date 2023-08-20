<?php
$arrayA = [2, 3, 4, 5, 4, 6, 7];
$arrayB = [count($arrayA)];

foreach ($arrayA as $item => $element) {
    if (count($arrayA) < 5) {
        $arrayB[$item] = 2 * $arrayA[$item];
        echo $arrayB[$item] . "\n";
    } else {
        $arrayB[$item] = $arrayA[$item] / 2;
        echo $arrayB[$item] . "\n";
    }
}


for ($i = 0; $i < count($arrayA); $i++) {
    if (count($arrayA) < 5) {
        $arrayB[$i] = 2 * $arrayA[$i];
        echo $arrayB[$i] . "\t";

    } else {
        $arrayB[$i] = $arrayA[$i] / 2;
        echo $arrayB[$i] . "\t";
    }
}

