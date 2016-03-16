<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Картинка</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php  ?>
<div class="inner">
    <img src="<?= $pic['0']['img_path']; ?>" alt="<?= $pic['0']['file_name']; ?>"><br>
    <p><b>Количество просмотров: </b><?= $pic['0']['views'] ?></p>

    <a href="/">Вернуться в галерею</a>
</div>
</body>
</html>