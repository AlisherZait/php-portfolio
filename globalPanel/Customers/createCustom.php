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
    <title>Globalroom</title>
    <link rel="stylesheet" href="../../CSS/globalroom.css">
    <link rel="shortcut icon" type="image/png" href="../../media/Img/logo.PNG"/>




   <style>
body {font-family: Montserrat;
    background-image: url(../../../media/Img/bdcust.jpg);
    background-size:100%;
}
th, td {
  padding: 20px;
}

th {
  background: #606060;
  color: #fff;
}

td {
  background: #b5b5b5;
}

a {
    color: #7c9ab7;
    font-weight: bold;
    text-decoration: none;
}
.table{
    margin-left: 30px;
    float: left;
}

form {
    display: flex;
    flex-direction: column;
    width: 450px;
    float: left;
    margin-left: 30px;
}

input {
    margin: 10px 0;
    padding: 10px;
    border: unset;
    border-bottom: 2px solid #e3e3e3;
    outline: none;
}

button {
    padding: 10px;
    background: #e3e3e3;
    border: unset;
    cursor: pointer;
}
   </style>
</head>

<body>


<ul id="navbar"style="margin-left: 640px; margin-right:60px;" >
      <li><a href="#">Home</a>
      <ul>
          <li><a href="../../Index.html">Главная</a></li>
          <li><a href="../../html/3str.html">Расписание</a></li>
          <li> <a href="../../html/2str.php">Cвязаться</a></li>
        </ul></li>
      <li><a href="#">Клиенты</a>
      <ul>
          <li><a href="../Customers.php">База клиентов</a></li>
          <li><a href="../globalroom.php">Посетители</a></li>
        </ul>
      </li>

      <li><a href="#">Сотрудники</a>
        <ul>
        <li><a href="../Staff.php">Персанал</a></li>
          <li><a href="../trainers.php">Тренры</a></li>
        </ul>
      </li>

      <li><a href="#">трен клиент</a>
        <ul>
        <li><a href="../trainer inter/t1r/Trainer1Room.php">Зайт Алишер</a></li>
          <li><a href="../trainer inter/t2r/Trainer2Room.php">Аманкелды Диана</a> <li>
          <li><a href="../trainer inter/t3r/Trainer3Room.php">Мусаханов Дамир</a> <li>
       
        </ul>
      </li>

      <li><a href="../admin/auth.php">Выход</a></li>
    </ul>
  
        <form action="create.php" method="post" >
    <h3 style=" color:#fff;">Новый клиент</h3>
    <label style="color:#fff; ">ФИО</label>
        <input type="text" name="full_name" required placeholder="Введите полное имя"><br>
        <label style=" color:#fff;">Логин</label>
        <input type="text" name="login" required placeholder="Введите логин"><br>
        <label style=" color:#fff;">phone</label>
        <input type="text" name="phone" required placeholder="Введите  номер"><br>
        <label style="color:#fff;" >Пароль</label>
        <input type="password" name="password" required placeholder="Введите пароль"><br>
     


     
        
        <button type="submit">Добавить 
    </form>
        
  


 
</body>
</html>
