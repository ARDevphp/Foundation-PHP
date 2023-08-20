<?php
$a = 3;
$b = 9;

for ($i = $a; $i <= $b; $i++) {
    for ($j = $a; $j < $i; $j++) {
        echo $i . "\t";
    }
    echo "\n";
}