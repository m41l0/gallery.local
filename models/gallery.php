<?php

require_once __DIR__ . '/../functions/sql.php';

function imagesGetAll()
{
    $sql = "SELECT * FROM `gallery` ORDER BY `views` DESC";
    return sqlQuery($sql);
}

function imagesInsert($data)
{
//    var_dump($data);die;
    $sql = "
        INSERT INTO `gallery`
        (`id`, `file_name`, `img_path`, `thumb_path`)
        VALUES
        ('', '" . $data['file_name'] . "', '" . $data['img_path'] . "', '" . $data['thumb_path'] . "')
        ";
    sqlExec($sql);
}

function rowCount($item)
{
    $link = sqlConnect();
    $sql = "SELECT `id` FROM `gallery` WHERE `file_name` = '$item'";
    return mysqli_num_rows(mysqli_query($link, $sql));
}

// Счетчик просмотров
function updateCounter($id)
{
    $sql = "UPDATE `gallery` SET `views`=`views`+1 WHERE `id`='$id'";
    sqlExec($sql);
}

// Выбор картинки по id
function viewPic($id)
{
    $sql = "SELECT `img_path`, `views`, `file_name` FROM `gallery` WHERE `id` = '$id'";
    return sqlQuery($sql);
}