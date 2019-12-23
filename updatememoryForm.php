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

<form action="updatememory.php" method="post">
        <label>ID, яке змінюємо</label><input name="id" type="text"><br>
        <label>Назва</label><input name="memory_name" type="text"><br>
        <label>Об'єм</label><input name="memory_size" type="text"><br>
        <label>Частота</label><input name="memory_frequency" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>