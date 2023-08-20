<?php
$name = $_POST['ism'];
$userName = $_POST['fmilya'];
if (isset($name) && empty($name)) {
    if (strlen($name) < 1){
        echo "ism kiritilmadi";
    }
} else {
    echo "Salom" . $name . "\n";
    echo "Salom" . $userName . "\n";

}