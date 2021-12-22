<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../vendor/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Globalroom</title>
    <link rel="stylesheet" href="../CSS/globalroom.css">
    <link rel="shortcut icon" type="image/png" href="../media/Img/logo.PNG"/>




   <style>
body {font-family: Montserrat;
    background-image: url(../../media/Img/bdcust.jpg);
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


<ul id="navbar"style="margin-left: 600px; margin-right:30px;" >
      <li><a href="#">Home</a>
      <ul>
          <li><a href="../Index.html">Главная</a></li>
          <li><a href="../html/3str.html">Расписание</a></li>
          <li> <a href="../html/2str.php">Cвязаться</a></li>
        </ul></li>
      <li><a href="#">Клиенты</a>
      <ul>
          <li><a href="#">База клиентов</a></li>
          <li><a href="/globalPanel/globalroom.php">Посетители</a></li>
        </ul>
      </li>

      <li><a href="#">Сотрудники</a>
        <ul>
        <li><a href="Staff.php">Персанал</a></li>
          <li><a href="trainers.php">Тренры</a></li>
        </ul>
      </li>

      <li><a href="#">трен клиент</a>
        <ul>
        <li><a href="trainer inter/t1r/Trainer1Room.php">Зайт Алишер</a></li>
          <li><a href="trainer inter/t2r/Trainer2Room.php">Аманкелды Диана</a> <li>
          <li><a href="trainer inter/t3r/Trainer3Room.php">Мусаханов Дамир</a> <li>
       
        </ul>
      </li>
      <li><a href="../globalPanel/Customers/createCustom.php">Добавить</a></li>
      <li><a href="../admin/auth.php">Выход</a></li>
    </ul>
    <h1 style="color:#aaa;">База клиентов
</h1>


   


    <?php
        $connect = mysqli_connect('localhost','root','root','test');
if(isset($_POST['search']))
{
    $full_name=$_POST['full_name'];
    $query="SELECT*FROM customers WHERE full_name='$full_name'";
    $query_run=mysqli_query($connect,$query);
    while($row=mysqli_fetch_array( $query_run))
    {
        ?>
        <div class="table">
    <table>
        <tr>
            <th>ID</th>
            <th>Full name</th>
            <th>login</th>
            <th>Phone</th>
       
           
        </tr>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['full_name'] ?></td>
                        <td><?php echo $row['login'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        
                        <td><a href="Customers/CustomComm.php?id=<?php  echo $row['id'] ?>">Коммент</a></td>
                        <td><a href="Customers/update.php?id=<?php  echo $row['id'] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="customers/delete.php?id=<?php  echo $row['id'] ?>">Удалить</a></td>
                    </tr>
               
        <?php
    }
}

    ?>





<div class="table">
    <table>
        <tr>
            <th>ID</th>
            <th>Full name</th>
            <th>login</th>
            <th>Phone</th>
            
            
           
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $customer = mysqli_query($connect, "SELECT * FROM `customers`");
            $password = md5($password);


            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $customer = mysqli_fetch_all($customer);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - name
             * Ключ 2 - login
             * Ключ 3 - phone
             */

            foreach ($customer as $customer) {
                ?>
                    <tr>
                        <td><?= $customer[0] ?></td>
                        <td><?= $customer[1] ?></td>
                        <td><?= $customer[2] ?></td>
                        <td><?= $customer[3] ?></td>
                       
                       
                        <td><a href="Customers/CustomComm.php?id=<?= $customer[0] ?>">Коммент</a></td>
                        <td><a href="Customers/update.php?id=<?= $customer[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="Customers/delete.php?id=<?=  $customer[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>








          <form action="" method="POST">
 <input type="text" name="full_name"  required placeholder="Поиск по ФИО">
 <input type="submit" name="search" style="margin-left: 5px;" value="Искать">
        </form><br>


    </table>
        </div>
</body>
</html>
