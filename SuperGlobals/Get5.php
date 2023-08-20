<?php
function dump($a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

?>
<html>
<head>
    <title>Ro'yxatdan o'tish</title>
</head>
<body>
<form action="Get1.php" method="POST">

    <p>
        <label>
            ism* <input type="text" name="ism" placeholder="...">
        </label>
    </p>
    <p>
        <label>
            Familya* <input type="text" name="fmilya" placeholder="...">
        </label>
    </p>
    <button>Yuborish
    </button>

</form>
</body>
</html>
