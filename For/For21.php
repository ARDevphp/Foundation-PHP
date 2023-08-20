<?php
$a = 5;
$b = 10;

for ($i = $a; $i <= $b; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo $i . "\t";
    }
    echo "\n";
}

