<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця videocard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця videocard</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'procuk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM videocard')) { 

        printf("Список відеокарт: <br><br>");
        printf("<table><tr><th>ID</th><th>Назва</th><th>Пам'ять</th><th>Частота пам`яті</th></tr>");
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['vc_id'],  $row['vc_name'], $row['memory'],$row['core_clock']);
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertvideocardForm.php">Вставити рядок</a><br></li>
		<li><a href="updatevideocardForm.php">Редагувати рядок</a><br></li>
        <li><a href="deletevideocardForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
