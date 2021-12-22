<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once '../../vendor/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $customer_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $customer = mysqli_query($connect, "SELECT * FROM `customers` WHERE `id` = '$customer_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $customer = mysqli_fetch_assoc($customer);

    /*
     * Делаем выборку всех строк комментариев с полученным ID продукта выше
     */

    $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `id_customer` = '$customer_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     */

    $comments = mysqli_fetch_all($comments);
?>

<!doctype html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/png" href="../../media/Img/logo.PNG"/>

    <title>Customer</title>
</head>
<body style="  font-family: Montserrat;  background-image: url(../../media/Img/comment1.jpg);
    background-size:100%; ">
    <h2>ФИО: <?= $customer['full_name'] ?></h2>
    <h4 >Login <?= $customer['login'] ?></h4>
    <p >Номер телефона: <?= $customer['phone'] ?></p>

    <hr>

    <h3 >Add comment</h3>
    <form action="create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $customer['id'] ?>">
        <textarea name="comment"></textarea> <br><br>
        <button type="submit">Add comment</button>
    </form>

    <hr>

<h3 >Comments</h3>
<ul >
    <?php

        /*
         * Перебираем массив с комментариями и выводим
         */

        foreach ($comments as $comment) {
        ?>
            <li ><?= $comment[2] ?></li>
        <?php
        }
    ?>
</ul>
<a href="../Customers.php" style="color:#000;">Назад</a>
</body>
</html>