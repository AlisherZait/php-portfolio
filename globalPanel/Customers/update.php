<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once '../../vendor/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $customers_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $customers = mysqli_query($connect, "SELECT * FROM `customers` WHERE `id` = '$customers_id'");
    $password = md5($password);

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $customers = mysqli_fetch_assoc($customers);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update </title>
    <link rel="shortcut icon" type="image/png" href="media/Img/logo.PNG"/>

    <link rel="stylesheet" href="../../CSS/regist.css">
    <style >
        body{
            font-family: Montserrat;
            background-image: url(../../media/Img/bdcust.jpg);
    background-size:100%;
        }
    </style>
</head>
<body>
<div class="div">
    <form action="update2.php" method="post" >
        <input type="hidden" name="id" value="<?= $customers['id'] ?>">
        <h3 style="color:#fff;">Изменить </h3>
        <p style="color:#fff;"> ФИО</p>
        <input type="text" name="full_name" value="<?= $customers['full_name'] ?>"required placeholder>
        <p style="color:#fff;">login</p>
        <input type="text" name="login" value="<?= $customers['login'] ?>"required placeholder>
        <p style="color:#fff;">Phone</p>
        <input type="number" name="phone" value="<?= $customers['phone'] ?>"required placeholder> 
        <p style=" color:#fff;">Пароль</p>
        <input type="password" name="password"value="<?= $customers['password'] ?>" required placeholder="Введите пароль">    
        <button type="submit">Изменить</button>

       
      
    
    </form>
<br>
   <form action="../trainer inter/t1r/create.php" method="post" >
    <input type="hidden" name="id" value="<?= $customers['id'] ?>">
        <input type="hidden" name="full_name" value="<?= $customers['full_name'] ?>"required placeholder>
        <input type="hidden" name="login" value="<?= $customers['login'] ?>"required placeholder>
        <input type="hidden" name="phone" value="<?= $customers['phone'] ?>"required placeholder> 
        <input type="hidden"name="password" required placeholder="Введите пароль"value="<?= $customers['password'] ?>">
 
      
     <button type="submit"class="button">Зайт Алишер</button>
     </form>
     <br>
 <form action="../trainer inter/t2r/create.php" method="post">
    <input type="hidden" name="id" value="<?= $customers['id'] ?>">
        <input type="hidden" name="full_name" value="<?= $customers['full_name'] ?>"required placeholder>
        <input type="hidden" name="login" value="<?= $customers['login'] ?>"required placeholder>
        <input type="hidden" name="phone" value="<?= $customers['phone'] ?>"required placeholder> 
        <input type="hidden"name="password" required placeholder="Введите пароль"value="<?= $customers['password'] ?>">
        
        <button type="submit">Аманкелды Диана</button>
    </form>
    <br>


    <form action="../trainer inter/t3r/create.php" method="post">
    <input type="hidden" name="id" value="<?= $customers['id'] ?>">
        <input type="hidden" name="full_name" value="<?= $customers['full_name'] ?>"required placeholder>
        <input type="hidden" name="login" value="<?= $customers['login'] ?>"required placeholder>
        <input type="hidden" name="phone" value="<?= $customers['phone'] ?>"required placeholder> 
        <input type="hidden"name="password" required placeholder="Введите пароль"value="<?= $customers['password'] ?>">
      
        <button type="submit">Мусаханов Дамир</button>
    </form>
  
    <a href="../Customers.php">Вернуться назад</a>

    </div>
        
   


   
</body>
</html>