<?php
$year = 2020;

if ($year % 4 != 0) {
    echo "(365)";
} else if ($year % 400 == 0) {
    echo "(366)";
} else if ($year % 100 != 4) {
    echo "(365)";
}