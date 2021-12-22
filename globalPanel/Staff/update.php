<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once '../../vendor/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $staff_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $staff = mysqli_query($connect, "SELECT * FROM `staff` WHERE `id` = '$staff_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $staff = mysqli_fetch_assoc($staff);
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
            background-image: url(../../media/Img/sot.jpg);
            background-size:100%;
        }
    </style>
</head>
<body>
    
    <form action="update2.php" method="post">
        <input type="hidden" name="id" value="<?= $staff['id'] ?>">
        <h3 style="color:#fff;">Изменить </h3>
        <p style="color:#fff;"> ФИО</p>
        <input type="text" name="full_name" value="<?= $staff['full_name'] ?>"required placeholder>
        <p style="color:#fff;">login</p>
        <input type="text" name="login" value="<?= $staff['login'] ?>"required placeholder>
        <p style="color:#fff;">Phone</p>
        <input type="number" name="phone" value="<?= $staff['phone'] ?>"required placeholder> 
        <p style=" color:#fff;">Оклад</p>
        <input type="text" name="salary"value="<?= $staff['salary'] ?>" required placeholder="Введите оклад"><br>
        <p style=" color:#fff;">Должность</p>
        <input type="text" name="position"value="<?= $staff['position'] ?>" required placeholder="Введите должность"><br>
        
        <button type="submit">Изменить</button>
        <a href="../../Index.html">На главную страницу</a><br>
    <a href="../Staff.php">Вернуться назад</a>
    </form>
  
</body>
</html>