<?php
$name = "Ali";
$name1 = "Vli";

function globalExam()
{
    global $name, $name1;
    echo $name . "\t" . $name1;
}

$GLOBALS['$name'] = "Sher";
echo $GLOBALS['$name'];
globalExam();