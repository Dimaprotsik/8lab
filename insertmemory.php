<?php

$mysqli = new mysqli('localhost', 'root', '', 'procuk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$memory_name = $_POST['memory_name']; $memory_size = $_POST['memory_size']; $memory_frequency = $_POST['memory_frequency']; 

$sql = "INSERT INTO memory (memory_id, memory_name, memory_size, memory_frequency) VALUES ('','$memory_name', '$memory_size', '$memory_frequency')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showmemory.php")
?>
