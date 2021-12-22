<?php
session_start();

$login="reception";
$password="123";

$login_global="admin";
$pass_global="1234";

$Trainer1RoomLogin="Trainer1";
$Trainer1RoomPass="12345";

$Trainer2RoomLogin="Trainer2";
$Trainer2RoomPass="123456";

$Trainer3RoomLogin="Trainer3";
$Trainer3RoomPass="1234567";

if ($login===$_POST['login'] && $password===$_POST['password']){
 
    $_SESSION["login"]=$_POST['login'];
    $_SESSION["password"]=$_POST['password'];
    header('Location: adminroom.php');
    
}

else if  ($login_global===$_POST['login'] && $pass_global===$_POST['password']){
 
    $_SESSION["login_global"]=$_POST['login'];
    $_SESSION["password_global"]=$_POST['password'];
    header('Location: ../globalpanel/globalroom.php');
    
}


else if  ($Trainer1RoomLogin===$_POST['login'] && $Trainer1RoomPass===$_POST['password']){
 
    $_SESSION["Trainer1RoomLogin"]=$_POST['login'];
    $_SESSION["Trainer1RoomPass"]=$_POST['password'];
    header('Location: ../trainer/t1r/Trainer1Room.php');
    
}

else if  ($Trainer2RoomLogin===$_POST['login'] && $Trainer2RoomPass===$_POST['password']){
 
    $_SESSION["Trainer2RoomLogin"]=$_POST['login'];
    $_SESSION["Trainer2RoomPass"]=$_POST['password'];
    header('Location: ../trainer/t2r/Trainer2Room.php');
    
}


else if  ($Trainer3RoomLogin===$_POST['login'] && $Trainer3RoomPass===$_POST['password']){
 
    $_SESSION["Trainer3RoomLogin"]=$_POST['login'];
    $_SESSION["Trainer3RoomPass"]=$_POST['password'];
    header('Location: ../trainer/t3r/Trainer3Room.php');
    
}

else  {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: auth.php');
}
?>