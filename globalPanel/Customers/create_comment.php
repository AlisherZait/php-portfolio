<?php

//Добавление комментария

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../../vendor/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$comment = $_POST['comment'];

/*
 * Делаем запрос на добавление новой строки в таблицу comments
 */

mysqli_query($connect, "INSERT INTO `comments` (`id`, `id_customer`, `comment`) VALUES (NULL, '$id', '$comment')");

/*
 * Переадресация на страницу /product.php?id=
 */

header('Location: CustomComm.php?id=' . $id);