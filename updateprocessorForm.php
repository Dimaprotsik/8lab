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
        include("showprocessor.php")    
    ?>

<form action="updateprocessor.php" method="post">
        <label>ID рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Назва процесора</label><input name="ps_name" type="text"><br>
        <label>Тактова частота</label><input name="frequency" type="text"><br>
        <label>Форм-фактор</label><input name="socket_type" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>