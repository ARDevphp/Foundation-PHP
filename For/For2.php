<?php
$a = 3;
$b = 8;
$count = 0;

if ($a < $b) {
    for ($i = $a; $i <= $b; $i++) {
        $count++;
        echo $i . "\n";
    }
    echo "summa " . $count;
} else {
    echo "(a < b)";
}

function add(): void
{
    print "salom";
}

add();