<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$ps_name = $_POST["ps_name"]; $frequency = $_POST['frequency']; $socket_type = $_POST['socket_type'];

$sql = "INSERT INTO processor (ps_id, ps_name, frequency, socket_type) VALUES ('', '$ps_name', '$frequency', '$socket_type')";

if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



$mysqli->close();

include("showprocessor.php")
?>