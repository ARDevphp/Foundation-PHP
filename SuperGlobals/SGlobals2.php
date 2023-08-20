<?php
$age = 32;
function dump($global)
{
    echo "<pre>";
    print_r($global);
    echo "<pre>";
}

function f()
{
    $GLOBALS['a'] = 32;
    print_r($GLOBALS);
}
f();
dump($GLOBALS);