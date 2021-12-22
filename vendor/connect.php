<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'test');


    $connect = mysqli_connect('localhost','root','root','test');

    if (!$connect) {
        die('Error connect to DataBase');
    }