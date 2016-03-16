<?php

require __DIR__ . '/models/gallery.php';

$items = Images_getAll();

include __DIR__ . '/views/main.php';