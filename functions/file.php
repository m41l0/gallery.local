<?php

include_once __DIR__ . '/img_resize.php';

function File_upload($field)
{
    if (empty($_FILES))
        return false;
    if (0 != $_FILES[$field]['error'])
        return false;
    if (($_FILES[$field]['size'] > (512 * 1024)))
        return false;
    if ((stristr($_FILES[$field]['type'], '/', true) != 'image'))
        return false;
    if (is_uploaded_file($_FILES[$field]['tmp_name'])) {
        $result = move_uploaded_file( // return bool
            $_FILES[$field]['tmp_name'],
            __DIR__ . '/../img/' . $_FILES[$field]['name']
        );
        if (!$result) {
            return false;
        }
        else {
//            return './img/' . $_FILES[$field]['name'];
            return $_FILES[$field]['name'];
        }
    }
    return false;
}

//function createDir($dir, $thmb_dir)
//{
//    if (!(file_exists($dir) and file_exists($thmb_dir))) {
//        mkdir($dir);
//        mkdir($thmb_dir);
//    }
//    return;
//}