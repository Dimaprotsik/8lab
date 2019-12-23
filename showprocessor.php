<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця processor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця processor</h1>

      <?php

    $mysqli = new mysqli('localhost', 'root', '', 'procuk'); 
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM processor')) {

        printf("Список аккаунтів: <br><br>");
        printf("<table><tr><th>ID процесора</th><th>Назва</th><th>Частота</th><th>Форм-фактор</th></tr>");
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row["ps_id"], $row["ps_name"], $row["frequency"], $row["socket_type"]);
        };

        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>


    <br><br><br>

    <ul>
		<li><a href="insertprocessorForm.php">Вставити рядок</a><br></li>
		<li><a href="updateprocessorForm.php">Редагувати рядок</a><br></li>
        <li><a href="deleteprocessorForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
