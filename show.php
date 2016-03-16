<?php

require __DIR__ . '/models/gallery.php';

$items = Images_getAll();
$pic = View_pic($_GET['id']);
Update_counter($_GET['id']);

include __DIR__ . '/views/image.php';