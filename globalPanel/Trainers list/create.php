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
    <link rel="stylesheet" href="../../CSS/regist.css">
    <style >
        body{
            font-family: Montserrat;
            background-image: url(../../media/Img/trenList.png);
        }
    </style>
</head>
<body>
    
<form action="create2.php" method="post" >
    <h3 style=" color:#fff;">Новый тренер</h3>
    <label style="color:#fff; ">ФИО</label>
        <input type="text" name="full_name" required placeholder="Введите полное имя"><br>
        <label style=" color:#fff;">Логин</label>
        <input type="text" name="login" required placeholder="Введите логин"><br>
        <label style=" color:#fff;">phone</label>
        <input type="text" name="phone" required placeholder="Введите  номер"><br>
        <label style=" color:#fff;">Оклад</label>
        <input type="text" name="salary" required placeholder="Введите оклад"><br>
        
        
        
        <button type="submit">Добавить </button>
        <a href="../Trainers.php">Вернуться назад</a>
    </form>
    <br>
    
   
  
</body>
</html>