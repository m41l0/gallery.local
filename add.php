<?php

require __DIR__ . '/models/gallery.php';
require __DIR__ . '/functions/file.php';

// Если что-то прибежало из формы
if (isset($_FILES)) {
    $data = [];

    if (!empty($_FILES)) {
        $result = fileUpload('image');
        if (false !== $result) {
            $data['img_path'] = './img/' . $result;
            $data['thumb_path'] = './img/thumb/' . 'thmb_' . $result;
        }

        $result_resize = img_resize($data['img_path'], $data['thumb_path'],
                                    300, 300, 0xffffff);
        if (!$result_resize) {
            false;
        }
    }

    if (!empty($_FILES['image']['name'])) {
        $data['file_name'] = $_FILES['image']['name'];
    }

    if ( (isset($data['img_path']) && isset($data['file_name'])) and
         (0 == rowCount($result)) // Ищет в базе имя файла, если такого нет - добавлеят запись
       )
    {
        imagesInsert($data);
        header('Location: /');
    }

    if (isset($_GET['id'])) {
        $pic = viewPic($_GET['id']);
        updateCounter($_GET['id']);
        include __DIR__ . '/views/image.php';
    } else {
        header('Location: /');
    }
}