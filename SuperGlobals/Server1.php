<?php
function dump($global)
{
    echo "<pre>";
    print_r($global);
    echo "</pre>";
}
dump($_SERVER);