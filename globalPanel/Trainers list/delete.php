<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../../vendor/connect.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id = $_GET['id'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */

mysqli_query($connect, "DELETE FROM `trainers` WHERE `trainers`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../Trainers.php');