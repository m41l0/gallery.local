<?php

// Настройка подключения к БД
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbName = 'testik';

// Подключение к серверу
$link = mysqli_connect($hostname, $username, $password) or die(mysqli_error($link));