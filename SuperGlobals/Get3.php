<?php
function damp($global)
{
    echo "<pre>";
    print_r($global);
    echo "</pre>";
}

damp($GLOBALS);
//nset($_POST['ism']);
echo "\n";
damp($GLOBALS);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ro'yhatdan o'tish</title>
</head>
<body>
<form action="Get3.php?type=formaz" method="POST">
    <p>
        <label>
            ism*
            <input type="text" name="ism" placeholder="..">
        </label>
    </p>
    <p>
        <label>
            familya*
            <input type="text" name="familya" placeholder="..">
        </label>
    </p>
    <button>Yuborish</button>
</form>
</body>
</html>