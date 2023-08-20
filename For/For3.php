<?php
$a = 3;
$b = 9;
$count = 0;

if ($a < $b) {
    for ($i = --$b; $i > $a; $i--) {
        $count++;
        echo $i . "\n";
    }
    echo "summa " . $count;
} else {
    echo "(a < b";
}