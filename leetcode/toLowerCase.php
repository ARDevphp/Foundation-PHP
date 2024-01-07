<?php
declare(strict_types=1);

function toLowerCase(string $str): void
{
    $str1 = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $strLower = $str[$i];

        if ($strLower >= 'A' && $strLower <= 'Z') {
            $str1 .= chr(ord($strLower) +32);
        } else {
            $str1 .= $strLower;
        }
    }
    echo $str1;
}

toLowerCase('Aziz aZiB');