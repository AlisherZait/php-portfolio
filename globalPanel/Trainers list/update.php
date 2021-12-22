<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once '../../vendor/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $trainers_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $trainers = mysqli_query($connect, "SELECT * FROM `trainers` WHERE `id` = '$trainers_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $trainers = mysqli_fetch_assoc($trainers);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update </title>
    <link rel="stylesheet" href="../../CSS/regist.css">
    <style >
        body{
            font-family: Montserrat;
            background-image: url(../../media/Img/trenList.png);

        }
    </style>
</head>
<body>
    
    <form action="update2.php" method="post">
        <input type="hidden" name="id" value="<?= $trainers['id'] ?>">
        <h3 style="color:#fff;">Изменить </h3>
        <p style="color:#fff;"> ФИО</p>
        <input type="text" name="full_name" value="<?= $trainers['full_name'] ?>"required placeholder>
        <p style="color:#fff;">login</p>
        <input type="text" name="login" value="<?= $trainers['login'] ?>"required placeholder>
        <p style="color:#fff;">Phone</p>
        <input type="number" name="phone" value="<?= $trainers['phone'] ?>"required placeholder> 
        <p style=" color:#fff;">Оклад</p>
        <input type="text" name="salary"value="<?= $trainers['salary'] ?>" required placeholder="Введите оклад"><br>
      
        
        <button type="submit">Изменить</button>
        <a href="../../Index.html">На главную страницу</a><br>
    <a href="../trainers.php">Вернуться назад</a>
    </form>
  
</body>
</html>