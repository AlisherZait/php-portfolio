<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../../vendor/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$login = $_POST['login'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];


/*
 * Делаем запрос на изменение строки в таблице 
 */


mysqli_query($connect, "UPDATE `trainers` SET `full_name` = '$full_name', `login` = '$login', `phone` = '$phone' , `salary` = '$salary'WHERE `trainers`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../trainers.php');