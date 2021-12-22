<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="CSS/regist.css">
    <style>
    body{
        background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);
    }
</style>
</head>
<body>

<!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" required placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" required placeholder="Введите пароль" >
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
            <br>
            <a href="Index.html">Главная страница сайта</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg" style="text-align: center;"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>