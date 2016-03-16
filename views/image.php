<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Картинка</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php //var_dump($pic);die; ?>
<div class="inner">
    <img src="<?= $pic['img_path']; ?>" alt="<?= $pic['file_name']; ?>"><br>
    <p><b>Количество просмотров: </b><?= $pic['views'] ?></p>

    <a href="/">Вернуться в галерею</a>
</div>
</body>
</html>



<?php

// Счетчик просмотров
//mysqli_query($link, "UPDATE `gallery` SET `views`=`views`+1 WHERE `id`='{$_GET['id']}'");

//$result = mysqli_query($link, "SELECT `img_src`, `views` FROM `gallery` WHERE `id` = '{$_GET['id']}'");
//$row = mysqli_fetch_assoc($result);
?>