<?php

require_once("Session2.php");
session_start();
if ($_SESSION['user_id']) {
    echo "yangi sahifa tabrilaymiz";
} else {
    echo "qayta urining";
    header('Location:./Session1.php');
}