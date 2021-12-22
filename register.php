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

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post">
        <label>ФИО</label>
        <input type="text" name="full_name" required placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" required placeholder="Введите свой логин">
        <label>phone</label>
        <input type="text" name="phone" required placeholder="Введите своей номер">
        <label>Пароль</label>
        <input type="password" name="password" required placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" required placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="form.php">авторизируйтесь</a>!<br>
            <a href="Index.html">Главная страница сайта</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>