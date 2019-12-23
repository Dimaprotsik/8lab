<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$monitor_name = $_POST['monitor_name']; $size = $_POST['size']; $monitor_frequency = $_POST['monitor_frequency'];

$sql = "INSERT INTO monitor (monitor_id, monitor_name, size, monitor_frequency) VALUES ('', '$monitor_name', '$size', '$monitor_frequency')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showmonitor.php")
?>
