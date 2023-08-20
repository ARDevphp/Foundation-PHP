<?php
$name = "";
if (isset($name) && !empty($name)) {
    echo "o'zgaruvchi mavjud";
} else {
    echo "bunday o'zgaruvchi mavjud emas";
}

$expected_array_got_string = 'somestring';
var_dump(isset($expected_array_got_string['some_key']));
var_dump(isset($expected_array_got_string[0]));
var_dump(isset($expected_array_got_string[1]));
var_dump(isset($expected_array_got_string[0.5]));
var_dump(isset($expected_array_got_string['0.5']));
var_dump(isset($expected_array_got_string['0 Mostel']));
