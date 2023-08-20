<?php
function lokal()
{
    $a = 21;
    global $a;
    $a = 23;
}

var_dump($GLOBALS);