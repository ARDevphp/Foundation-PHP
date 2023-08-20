<?php
declare(strict_types=1);
ini_set('display_errors', '1');
error_reporting(E_ALL);

function name($a, int $b): void
{
    echo $a + $b;
}

name("3", 5);
