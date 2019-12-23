<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$memory_name = $_POST['memory_name']; $memory_size = $_POST['memory_size']; $memory_frequency = $_POST['memory_frequency']; $id=$_POST['id'];

$sql = "UPDATE memory SET memory_name='$memory_name', memory_size='$memory_size', memory_frequency='$memory_frequency' WHERE memory_id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showmemory.php")
?>
