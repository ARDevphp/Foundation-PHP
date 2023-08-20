<?php
$a = 7;
$b = 8;
$c = 7;
if ($a <= $b && $a < $c) {
    echo $a;
} else if ($b < $a && $b <= $c) {
    echo $b;
} else if ($c <= $a && $c < $b) {
    echo $c;
} else {
    echo "(a = b = c)";
}