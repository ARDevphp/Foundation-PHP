<?php
function dump($global)
{
    echo "<pre>";
    print_r($global);
    echo "</pre>";
}

$err = false;
if (isset($_POST['name'])) {
    if (strlen($_POST['name']) < 1) {
        $err = "ismingini kiriting";
    } else {
        echo 'salom' . $_POST['name'];
    }
}
unset($_POST['femeliy']);
dump($GLOBALS);

?>
<html>
<head>
    <title>Ro'yxatdan o'tish</title>
</head>
<body>
<form action="POST1.php" method="POST">
    <?php if ($err) echo '<p style="color: red">' . $err . '</p>' ?>
    <p>
        <label>
            ism*
            <input type="text" name="name" placeholder="...">
        </label>
    </p>
    <p>
        <label>
            Familaya*
            <input type="text" name="femeliy" placeholder="...">
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
</html>
