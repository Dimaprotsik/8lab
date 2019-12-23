<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця computer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця computer</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'procuk'); 
    $mysqli->set_charset("utf8"); 
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM computer')) {   

        printf("Список комп'ютерів: <br><br>");
        printf("<table><tr><th>ID</th><th>Ціна</th><th>ID відеокарти</th><th>ID процесора</th><th>ID оперативної пам'яті</th><th>ID монітора</th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['cost'], $row['vc_id'], $row['ps_id'], $row['memory_id'], $row['monitor_id']); 
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertcomputerForm.php">Вставити рядок</a><br></li>
		<li><a href="updatecomputerForm.php">Редагувати рядок</a><br></li>
		<li><a href="deletecomputerForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
