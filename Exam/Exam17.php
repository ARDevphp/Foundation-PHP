<?php
$age = "";
$name = "";
//unset($age);
if (isset($age) && isset($name)) {
    echo "ok";
} else {
    echo "no";
}
if (empty($age) && empty($name)) {
    echo "sa";
} else {
    echo "alo";
}