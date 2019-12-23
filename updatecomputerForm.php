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
        include("showcomputer.php")    
    ?>

<form action="updatecomputer.php" method="post">
        <label>ID, яке змінюємо</label><input name="id" type="text"><br>
        <label>Ціна</label><input name="cost" type="text"><br>
        <label>ID відеокарти</label><input name="vc_id" type="text"><br>
        <label>ID процесора</label><input name="ps_id" type="text"><br>
        <label>ID оперативної пам'яті</label><input name="memory_id" type="text"><br>
        <label>ID монітора</label><input name="monitor_id" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>