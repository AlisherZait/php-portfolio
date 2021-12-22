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
    <link rel="shortcut icon" type="image/png" href="../media/Img/logo.PNG"/>

    <link rel="stylesheet" href="../CSS/globalroom.css">


   <style>
body {
  
  font-family: Montserrat;
  background-image: url(../media/Img/trenList.png);
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

<body style="margin-left: 50px;">
<ul id="navbar" style="margin-left: 650px; margin-right:50px;" >
      <li><a href="#">Home</a>
      <ul>
          <li><a href="../Index.html">Главная</a></li>
          <li><a href="../html/3str.html">Расписание</a></li>
          <li> <a href="../html/2str.php">Cвязаться</a></li>
        </ul></li>
      <li><a href="#">Клиенты</a>
      <ul>
          <li><a href="Customers.php">База клиентов</a></li>
          <li><a href="/globalPanel/globalroom.php">Посетители</a></li>
        </ul>
      </li>

      <li><a href="#">Сотрудники</a>
        <ul>
        <li><a href="Staff.php">Персанал</a></li>
          <li><a href="#">Тренры</a> <li>
       
        </ul>
      </li>

      <li><a href="#">трен клиент</a>
        <ul>
        <li><a href="trainer inter/t1r/Trainer1Room.php">Зайт Алишер</a></li>
          <li><a href="trainer inter/t2r/Trainer2Room.php">Аманкелды Диана</a> <li>
          <li><a href="trainer inter/t3r/Trainer3Room.php">Мусаханов Дамир</a> <li>
       
        </ul>
      </li>



      <li><a href="../admin/auth.php">Выход</a></li>
    </ul> 

    <h1 style="color:#aaa;">Список тренеров
</h1>

  <form action="" method="POST" >
 <input type="text" name="full_name"  required placeholder="Поиск по ФИО"style=" width: 600px;">
 <input type="submit" name="search"  value="Искать" style="width: 250px;">
        </form>
<br>
        <form action="Trainers list/create.php" target="_blank" style="margin-top:50px;  width: 250px;      margin-left: -85px;">
   <button >Добавить</button>
  </form>

    </table>
        </div>
        <?php
        $connect = mysqli_connect('localhost','root','root','test');
if(isset($_POST['search']))
{
    $full_name=$_POST['full_name'];
    $query="SELECT*FROM trainers WHERE full_name='$full_name'";
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
            <th>Salary</th>
        </tr>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['full_name'] ?></td>
                        <td><?php echo $row['login'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['salary'] ?></td>
                        <td><a href="Trainers list/update.php?id=<?php echo $row['id'] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="Trainers list/delete.php?id=<?php echo $row['id'] ?>">Удалить</a></td>
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
            <th>Salary</th>
            
            
           
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $trainers = mysqli_query($connect, "SELECT * FROM `trainers`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $trainers = mysqli_fetch_all($trainers);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - name
             * Ключ 2 - login
             * Ключ 3 - phone
             */

            foreach ($trainers as $trainers) {
                ?>
                    <tr>
                        <td><?= $trainers[0] ?></td>
                        <td><?= $trainers[1] ?></td>
                        <td><?= $trainers[2] ?></td>
                        <td><?= $trainers[3] ?></td>
                        <td><?= $trainers[4] ?></td>
                        
                       
                    
                 
        <td><a style="color: red;" href="../globalPanel/Trainers list/delete.php?id=<?= $trainers[0] ?>">Удалить</a></td>
        <td><a href="Trainers list/update.php?id=<?= $trainers[0] ?>">Изменить</a></td>
        
       


       
                    </tr>
                <?php
            }
        ?>




        </div>
</body>
</html>
