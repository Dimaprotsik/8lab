<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$vc_name = $_POST['vc_name']; $memory = $_POST['memory']; $core_clock = $_POST['core_clock']; $id=$_POST['id'];

$sql = "UPDATE videocard SET vc_name='$vc_name', memory='$memory', core_clock='$core_clock' WHERE vc_id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showvideocard.php")
?>
