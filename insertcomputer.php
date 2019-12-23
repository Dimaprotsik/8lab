<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$cost = $_POST['cost']; $vc_id = $_POST['vc_id']; $ps_id = $_POST['ps_id']; $memory_id = $_POST['memory_id']; $monitor_id = $_POST['monitor_id'];

$sql = "INSERT INTO computer (id, cost, vc_id, ps_id, memory_id, monitor_id) VALUES ('', '$cost', '$vc_id', '$ps_id', '$memory_id', '$monitor_id')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showcomputer.php")
?>
