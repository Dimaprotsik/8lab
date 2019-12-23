<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця memory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця memory</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'procuk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM memory')) {

        printf("Список оперативної пам'яті: <br><br>");
        printf("<table><tr><th>ID</th><th>Назва</th><th>Об'єм пам'яті</th><th>Частота</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['memory_id'], $row['memory_name'], $row['memory_size'], $row['memory_frequency']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertmemoryForm.php">Вставити рядок</a><br></li>
		<li><a href="updatememoryForm.php">Редагувати рядок</a><br></li>
		<li><a href="deletememoryForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>