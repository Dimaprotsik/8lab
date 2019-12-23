<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Видалення даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showvideocard.php")    
    ?>

<form action="deletevideocard.php" method="post">
        <label>ID рядка, який видаляємо</label><input name="id" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>