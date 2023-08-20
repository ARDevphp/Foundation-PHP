<?php
session_start();
function dump($a)
{
    echo "<pre>";
    print_r($a);
    echo "<pre>";
}

$user = [
    "login" => 'aziz',
    "password" => '1234',
    "user_id" => "2324"
];

require_once('Session2.php');
if (count($_POST) > 1 && $_POST['user_login'] && $_POST['user_password']) {
    if ($_POST['user_login'] == $user["login"]) {
        if ($_POST["user_password"] == $user['password']) {
            $_SESSION['user_id'] = $user['user_id'];
            header('Location:./Session2.php');
        } else {
            echo "parol xato";
        }
    } else {
        echo "login xato";
    }
} else {
    echo "login parolni kiriting";
}
?>

<html>
<head>
    <title>Ro'yxadan o'tish</title>
</head>
<body>
<form action="Session1.php" method="POST">
    <p>
        <label>
            Login* <input type="text" name="user_login">
        </label>
    </p>
    <p>
        <label>
            Parol* <input type="password" name="user_password">
        </label>
    </p>
    <button>
        Yuborish
    </button>
</form>
</body>
</html>
