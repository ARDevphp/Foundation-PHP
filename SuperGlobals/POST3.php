<?php
function dump($m)
{
    echo "<pre>";
    print_r($m);
    echo "<pre>";
}

dump($_POST);
?>
<html>
<head>
    <title>Ro'yxatdan o'tish</title>
</head>
<body>
<form action="" method="POST">
    <label>
        ism* <input type="text" name="ism" placeholder="...">
    </label>
    <label>
        Familya* <input type="text" name="fmilya" placeholder="...">
    </label>

    <label>
        <input type="checkbox" name="Qiziq[]" value="Tongi Sayr">Tongi Sayr
        <input type="checkbox" name="Qiziq[]" value="Kitob o'qish">Kitob o'qish
        <input type="checkbox" name="Qiziq[]" value="Fitnas clubga borish">Fitnes clubga borish
    </label>

    <button>Yuborish
    </button>

</form>
</body>
</html>
