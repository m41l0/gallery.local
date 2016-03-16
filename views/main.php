<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="inner">
    <h1>ГАЛЕРЕЯ</h1>
    <p>
    </p>
    <div class="hovergallery">
        <?php foreach ($items as $item): ?>
        <figure>
            <a href="/add.php?id=<?= $item['id']; ?>" target="_self">
                <img src="<?= $item['thumb_path']; ?>" alt="<?= $item['file_name']; ?>" width="300">
            </a>
            <figcaption>Просмотров: <?php echo $item['views']; ?></figcaption>
        </figure>
        <?php endforeach; ?>
    </div>

    <?php include __DIR__ . '/form.php'; ?>
</div>
</body>
</html>