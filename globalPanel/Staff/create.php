<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once '../../vendor/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="shortcut icon" type="image/png" href="media/Img/logo.PNG"/>

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
    
<form action="create2.php" method="post" >
    <h3 style=" color:#fff;">Новый сотрудник</h3>
    <label style="color:#fff; ">ФИО</label>
        <input type="text" name="full_name" required placeholder="Введите полное имя"><br>
        <label style=" color:#fff;">Логин</label>
        <input type="text" name="login" required placeholder="Введите логин"><br>
        <label style=" color:#fff;">phone</label>
        <input type="text" name="phone" required placeholder="Введите  номер"><br>
        <label style=" color:#fff;">Оклад</label>
        <input type="text" name="salary" required placeholder="Введите оклад"><br>
        <label style=" color:#fff;">Должность</label>
        <input type="text" name="position" required placeholder="Введите должность"><br>
        
        
        <button type="submit">Добавить </button>
        <a href="../Staff.php">Вернуться назад</a>
    </form>
    <br>
    
   
  
</body>
</html>