<?php

function dump($a)
{
    echo "<pre>";
    print_r($a);
    echo "<pre>";

}
$err = false;

if (isset($_POST['name'])) {
    if (strlen($_POST['name']) < 1){
        $err = "ism kiriting";
    }
    if (!$_FILES['userFile']["size"]) {
        $err = "faylni yuklang";
    }else{
        //dump($_FILES['userFile']);
        if ($_FILES && $_FILES['userFile']['error']==0){
            $name = 'userImegs/'. $_POST['name'].'.png';
            $file = move_uploaded_file($_FILES['userFile']['tmp_name'],$name);
            if ($file) {
                echo "fayl yuklandi";
            }
        }
    }
}

?>
<html>
<head>
    <title>Ro'yxatdan o'tish</title>
</head>
<body>
<h1>Ro'yxatdan o'tish</h1>
<form action="Files2.php" method="POST" enctype="multipart/form-data">
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