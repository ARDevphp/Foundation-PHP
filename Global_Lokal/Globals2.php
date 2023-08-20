<?php
$name = "Sher";

function f()
{
    global $name;
    echo $name;
}

f();
