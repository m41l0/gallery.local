<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Картинка</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="inner">
    <img src="<?= $pic['img_path']; ?>" title="<?= $pic['title']; ?>" alt="<?= $pic['alt']; ?>"><br>
    <p><b>Количество просмотров: </b><?= $pic['views'] ?> |
    <b>Тег 'title': </b><?= $pic['title'] ?> |
    <b>Тег 'alt': </b><?= $pic['alt'] ?> |
    <b>Дата: </b><?= $pic['date'] ?></p>

    <a href="/">Вернуться в галерею</a><br>
</div>
</body>
</html>