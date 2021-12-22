<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="CSS/regist.css">
</head>
<style>
    body{
        background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
    }
</style>
<body>

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?><br>Урааааааа!Мы вас ждем<BR> 
        Чтобы вернутся  на наш сайт обратно нажмите <a href="Index.html">сюда</a></h2>
        <a href="#"><?= $_SESSION['user']['phone'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>