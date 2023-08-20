<?php
$age = 22;
function f1()
{
    global $age;
    echo "f1 " . $age . "\t";
    $age = 28;
    echo $age . "\n";
}

function f2()
{
    global $age;
    echo $age;
}

f1();
f2();