<?php

// Подключение к БД
function Sql_connect()
{
// Настройка подключения к БД
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'test';

    $link = mysqli_connect($hostname, $username, $password) or die(mysqli_error($link));
    mysqli_select_db($link, $dbName) or die(mysqli_error($link));
    return $link;
}

// Выполнение запроса
function Sql_exec($sql)
{
    $link = Sql_connect();
    mysqli_query($link, $sql);
}

// Выполнение запросов к БД
function Sql_query($sql)
{
    $link = Sql_connect();
    $result = mysqli_query($link, $sql);

    $ret = [];
    while (false != $row = mysqli_fetch_assoc($result)) {
        $ret[] = $row;
    }

    return $ret; // на выходе массив записей из БД
}




//function start()
//{
//    // Языкова настройка
//    setlocale(LC_ALL, 'ru_RU.UTF-8');
//
//    // Подключение к серверу
//    require_once './connect.php';
//
//    // Создание БД
//    if (!($result = mysqli_select_db($link, $dbName))) { // Проверка на существование БД
//        if (!($result = mysqli_query($link, "CREATE DATABASE $dbName CHARACTER SET utf8 COLLATE utf8_general_ci"))) {
//            $error = mysqli_error($link);
//            echo $error;
//        }
//    };
//
//    // Подключение к БД
//    mysqli_select_db($link, $dbName) or die(mysqli_error($link));
//
//    // Создание таблицы
//    if (!($result = mysqli_query($link, "SELECT id FROM gallery LIMIT 1"))) { // Проверка на существование таблицы
//        if (!($result = mysqli_query($link,
//            "CREATE TABLE gallery
//                        (
//                          id INT(9) NOT NULL AUTO_INCREMENT,
//                          img_src VARCHAR(255) NOT NULL,
//                          thumb_src VARCHAR(255) NOT NULL,
//                          file_name VARCHAR(255) NOT NULL,
//                          views INT(5) NOT NULL,
//                          PRIMARY KEY (id)
//                        )"))
//        ) {
//            $error = mysqli_error($link);
//            return $error;
//        }
//    };
//}