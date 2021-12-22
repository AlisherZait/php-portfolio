<?php
session_start();
//получим данные с элементов формы
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//обработаем полученные данные

$name = htmlspecialchars($name);//преобразование символов в сущности(мнемоники)
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);


$name = urldecode($name);//декодирование URL 
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);


$name = trim($name);//удаление пробльных символов с обоих сторон
$email = trim($email);
$phone = trim($phone);
$message = trim($message);


// отправляем данные на почту

if(mail("alisher.zait.99@mail.ru",
"Новое письмо с сайта",
"ИМЯ:".$name."\n".
"Еmail:".$email."\n".
"Телефон:".$phone."\n".
"From: aidae_97@mail.ru \r\n"))


{
    $_SESSION['message'] = 'Письмо успешно отпрвлено!';
    header('Location: 2str.php');
}
else{
    $_SESSION['message'] = 'Есть ошибки';
    header('Location: 2str.php');

}

?>