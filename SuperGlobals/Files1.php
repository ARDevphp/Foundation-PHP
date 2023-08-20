<?php
function dump($a)
{
    echo "<pre>";
    print_r($a);
    echo "<pre>";

}

dump($GLOBALS);
?>
<html>
<head>
    <title>Ro'yxatdan o'tish</title>
</head>
<body>
<h1>Ro'yxatdan o'tish</h1>
<form action="Files1.php" method="POST" enctype="multipart/form-data">
    <p>
        <label>
            ism* <input type="text" name="name" placeholder="...">
        </label>
    </p>
    <p>
        <label>
            <input type="file" name="userFile">
        </label>
    </p>
    <button>Jo'natish</button>
</form>
</body>
</html>
