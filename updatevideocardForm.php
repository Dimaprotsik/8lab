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
        include("showvideocard.php")    
    ?>

<form action="updatevideocard.php" method="post">
        <label>ID групи, яку змінюємо</label><input name="id" type="text"><br>
        <label>Назва відеокарти</label><input name="vc_name" type="text"><br>
        <label>Об'єм пам'яті</label><input name="memory" type="text"><br>
        <label>Частота</label><input name="core_clock" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>