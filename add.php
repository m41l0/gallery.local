<?php

require __DIR__ . '/models/gallery.php';
require __DIR__ . '/functions/file.php';

// Если что-то прибежало из формы
if (isset($_FILES)) {
    $data = [];

    if (!empty($_FILES)) {
        $result = File_upload('image');
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
         (0 == RowCount($result))
       )
    {
        Images_insert($data);
        header('Location: ./index.php');
    }
}

include __DIR__ . '/views/upload.php';