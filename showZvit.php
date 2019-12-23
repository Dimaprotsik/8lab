<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Звіт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Звіт</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'procuk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT c.id, c.cost, v.vc_name, p.ps_name, m.memory_name, mo.monitor_name FROM computer c INNER JOIN videocard v ON c.vc_id=v.vc_id INNER JOIN processor p ON c.ps_id=p.ps_id INNER JOIN memory m ON c.memory_id=m.memory_id INNER JOIN monitor mo ON c.monitor_id=mo.monitor_id')) {

        printf("Список: <br><br>");
        printf("<table><tr><th>ID комп'ютера</th><th>Ціна</th><th>Відеокарта</th><th>Процесор</th><th>Оперативна пам'ять</th><th>Монітор</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['cost'], $row['vc_name'], $row['ps_name'], $row['memory_name'], $row['monitor_name']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
