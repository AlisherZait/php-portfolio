<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../vendor/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$password = md5($password);
/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `users` (`id`, `full_name`, `login`, `phone`, `password`) VALUES (NULL, '$full_name', '$login', '$phone','$password')");

/*
 * Переадресация на главную страницу
 */

header('Location: adminroom.php');