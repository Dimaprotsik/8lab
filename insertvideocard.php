<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$vc_name = $_POST['vc_name']; $memory = $_POST['memory']; $core_clock = $_POST['core_clock']; 

$sql = "INSERT INTO videocard (vc_id, vc_name, memory, core_clock) VALUES ('', '$vc_name', '$memory', '$core_clock')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showvideocard.php")
?>
