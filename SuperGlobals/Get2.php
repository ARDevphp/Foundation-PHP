<?php

function dump($global)
{
    echo "<pre>";
    print_r($global);
    echo "</pre>";
}
unset($_GET['ism']);
dump($_GET);

?>

<!DOCTYPE>
<html lang="uz">
<head>
    <title>Ro'yhatdan o'tish</title>
</head>
<body>
    <h1>Ro'yhatdan o'tish</h1>
    <form >
        <p>
            <label>
                ism *
                <input type="text" name="ism" placeholder="...">
            </label>
        </p>
        <p>
            <label>
                familya *
                <input type="text" name="familya" placeholder="...">
            </label>
        </p>
        <button>Yuborish</button>
    </form>
</body>
<html>
