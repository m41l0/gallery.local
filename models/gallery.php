<?php

require_once __DIR__ . '/../functions/sql.php';

function Images_getAll()
{
    //"SELECT `id`, `thumb_src`, `file_name`, `views` FROM `gallery` ORDER BY `views` DESC") // Запрос из старой функции

    $sql = 'SELECT * FROM gallery';
    return Sql_query($sql);
}

function Images_insert($data)
{
//    var_dump($data);die;
    $sql = "
        INSERT INTO `gallery`
        (`id`, `file_name`, `img_path`, `thumb_path`)
        VALUES
        ('', '" . $data['file_name'] . "', '" . $data['img_path'] . "', '" . $data['thumb_path'] . "')
        ";
    Sql_exec($sql);
}

function RowCount($item)
{
    $link = Sql_connect();
    $sql = "SELECT `id` FROM `gallery` WHERE `file_name` = '$item'";
    return mysqli_num_rows(mysqli_query($link, $sql));
}

// Счетчик просмотров
function Update_counter($id)
{
    $sql = "UPDATE `gallery` SET `views`=`views`+1 WHERE `id`='$id'";
    Sql_exec($sql);
}

function View_pic($id)
{
    $link = Sql_connect();
    $sql = "SELECT `img_path`, `views`, `file_name` FROM `gallery` WHERE `id` = '$id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}