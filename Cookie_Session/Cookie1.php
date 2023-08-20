<?php
function dump($a)
{
    echo "<pre>";
    printf($a);
    echo "<pre>";
}

setcookie("user_id", "4223", time() + 20, "/");
dump($_COOKIE);