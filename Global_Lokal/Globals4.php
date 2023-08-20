<?php
$name = "Ali";

function f()
{
    global $name;
    echo $name . "\n";
    $name = "sher";
    echo $name . "\n";
}

f();
echo $name . "\n";