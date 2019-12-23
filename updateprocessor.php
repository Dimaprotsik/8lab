<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$ps_name = $_POST["ps_name"]; $frequency = $_POST['frequency']; $socket_type = $_POST['socket_type']; $id=$_POST['id'];

$sql = "UPDATE processor SET ps_name='$ps_name', frequency='$frequency', socket_type='$socket_type' WHERE ps_id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showprocessor.php")
?>