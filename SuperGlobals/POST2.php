<?php

function dump($global)
{
    echo '<pre>';
    print_r($global);
    echo '</pre>';
}

$err = false;
if (isset($_POST['name'])) {
//    function clear($t)
//    {
//        return strip_tags(trim($t));
//    }

    $_POST = array_map(fn($t) => strip_tags(trim($t)), $_POST);
    if (strlen($_POST['name']) < 1) {
        $err = 'ismingizni kiriting';
    } else {
        echo 'salom ' . $_POST['name'] . ' <br>';
    }
}
dump($_POST);
?>

<html>
<head>
    <title>Ro'yxatdan o'tish</title>
</head>
<body>
<form action="POST2.php" method="POST">
    <?php if ($err) echo '<p style="color:red">' . $err . '<p>' ?>

    <p>
        <label>
            ism*
            <input type="text" name="name" placeholder="..">
        </label>
    </p>
    <p>
        <label>
            Familya*
            <input type="text" name="surName" placeholder="..">
        </label>
    </p>
    <p>
        <label>
            password*
            <input type="password" name="password" placeholder="...">
        </label>
    </p>
    <button>Yuborish</button>
</form>
</body>
<html>