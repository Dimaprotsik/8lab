<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця monitor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця monitor</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'procuk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM monitor')) {

        printf("Список моніторів: <br><br>");
        printf("<table><th>ID монітора</th><th>Назва</th><th>Розмір</th><th>Частота</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['monitor_id'], $row['monitor_name'], $row['size'], $row['monitor_frequency']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertmonitorForm.php">Вставити рядок</a><br></li>
		<li><a href="updatemonitorForm.php">Редагувати рядок</a><br></li>
        <li><a href="deletemonitorForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
