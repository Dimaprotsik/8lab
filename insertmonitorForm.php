<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showmonitor.php")    
    ?>

    <form action="insertmonitor.php" method="post">
        <label>Назва монітора</label><input name="monitor_name" type="text"><br>
        <label>Розмір</label><input name="size" type="text"><br>
        <label>Частота</label><input name="monitor_frequency" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
