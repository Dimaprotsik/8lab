<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$monitor_name = $_POST['monitor_name']; $size = $_POST['size']; $monitor_frequency = $_POST['monitor_frequency']; $id = $_POST['id'];

$sql = "UPDATE monitor SET monitor_name='$monitor_name', size='$size', monitor_frequency='$monitor_frequency' WHERE monitor_id = '$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showmonitor.php")
?>
