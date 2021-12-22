<?php
session_start();
if ( $_SESSION["login"]===$_POST['login'] && $_SESSION["password"]===$_POST['password']) {
    header('Location: adminroom.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="shortcut icon" type="image/png" href="media/Img/logo.PNG"/>

    <link rel="stylesheet" href="../CSS/regist.css">
    <style >
        body{
            background-color: #ff0000;
     background-image: linear-gradient(130deg, #000000 40%, #04619f 100% );
     font-family: Montserrat;
    
    }
        
    </style>
</head>
<body>

<!-- Форма авторизации -->

    <form action="proverka.php" method="post">
        <label style="color:#fff;">Логин</label>
        <input type="text" name="login" required placeholder="Введите свой логин">
        <label style="color:#fff;">Пароль</label>
        <input type="password" name="password" required placeholder="Введите пароль" >
        <button type="submit">Войти</button>
       <br>
            <a href="../Index.html">Главная страница сайта</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg" style="color:red;align-items: center;"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>