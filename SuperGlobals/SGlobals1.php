<?php
$name = "Alisher";
function dump($global)
{
    echo "<pre>";
    print_r($global);
    echo "<pre>";
}
function f()
{
    $GLOBALS['name'] = "Sher";
    echo $GLOBALS['name'];
}
f();
dump($GLOBALS);

//f();
