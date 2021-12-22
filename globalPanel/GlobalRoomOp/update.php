<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once '../../vendor/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $user_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $user = mysqli_fetch_assoc($user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="media/Img/logo.PNG"/>

    <title>Update </title>
    <link rel="stylesheet" href="../../CSS/regist.css">
    <style >
        body{
            font-family: Montserrat;
            background-image: url(../../media/Img/globadmin.jpg);
            background-size:100%;
        }
    </style>
</head>
<body>
    
    <form action="../Customers/create.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <h3 style="color:#fff;">Изменить </h3>
        <p style="color:#fff;"> ФИО</p>
        <input type="text" name="full_name" value="<?= $user['full_name'] ?>"required placeholder>
        <p style="color:#fff;">login</p>
        <input type="text" name="login" value="<?= $user['login'] ?>"required placeholder>
        <p style="color:#fff;">Phone</p>
        <input type="number" name="phone" value="<?= $user['phone'] ?>"required placeholder> 
        <br>
        <p style="color:#fff;">Пароль</p>
        <input type="password" name="password" required placeholder="Введите пароль"value="<?= $user['password'] ?>">
        <br> <br>
        <button type="submit">Записать</button>


       





    
    
    <a href="../globalroom.php">Вернуться назад</a>
    </form>


    

</body>
</html>