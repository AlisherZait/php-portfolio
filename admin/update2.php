<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../vendor/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$login = $_POST['login'];
$phone = $_POST['phone'];
$password = $_POST['password'];

/*
 * Делаем запрос на изменение строки в таблице 
 */
$password = md5($password);

mysqli_query($connect, "UPDATE `users` SET `full_name` = '$full_name', `login` = '$login', `phone` = '$phone' , `password` = '$password' WHERE `users`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: adminroom.php');