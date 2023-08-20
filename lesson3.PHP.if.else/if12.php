<?php
$a = 4;
$b = 5;
$c = 6;

if ($a < $b && $a < $c) {
    echo "sonlar kichigi " . $a;
} elseif ($b < $a && $b < $c) {
    echo "sonlar kichigi " . $b;
} else if ($c < $a && $c < $b) {
    echo "sonlar kichigi " . $c;
}