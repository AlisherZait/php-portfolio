<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../../vendor/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];



mysqli_query($connect,"INSERT INTO `trainers` (`id`, `full_name`, `login`, `phone`, `salary`) VALUES (NULL, '$full_name', '$login', '$phone', '$salary')");

/*
 * Переадресация на главную страницу
 */

header('Location: ../trainers.php');