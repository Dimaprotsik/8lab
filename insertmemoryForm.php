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
        include("showmemory.php")    
    ?>

    <form action="insertmemory.php" method="post">
        <label>Назва</label><input name="memory_name" type="text"><br>
        <label>Об'єм</label><input name="memory_size" type="text"><br>
        <label>Частота</label><input name="memory_frequency" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
