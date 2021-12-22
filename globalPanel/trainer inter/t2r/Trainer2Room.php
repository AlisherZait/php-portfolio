<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../../../vendor/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrainerRoom</title>
    <link rel="stylesheet" href="../../../CSS/globalroom.css">
    <link rel="shortcut icon" type="image/png" href="../../../media/Img/logo.PNG"/>



   <style>
body {
  
  font-family: Montserrat;
  background-image: url(../../../media/Img/trendigl.jpg);
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


<ul id="navbar" style="margin-left: 700px; margin-right:50px;" >
      <li><a href="#">Home</a>
      <ul>
          <li><a href="../../../Index.html">Главная</a></li>
          <li><a href="../../../html/3str.html">Расписание</a></li>
          <li> <a href="../../../html/2str.php">Cвязаться</a></li>
        </ul></li>
      <li><a href="#">Клиенты</a>
      <ul>
          <li><a href="../../Customers.php">База клиентов</a></li>
          <li><a href="../../globalroom.php">Посетители</a></li>
        </ul>
      </li>

      <li><a href="#">Сотрудники</a>
        <ul>
        <li><a href="../../Staff.php">Персанал</a></li>
          <li><a href="../../trainers.php">Тренры</a></li>
        </ul>
      </li>


      <li><a href="#">трен клиент</a>
        <ul>
        <li><a href="../t1r/Trainer1Room.php">Зайт Алишер</a></li>
          <li><a href="#">Аманкелды Диана</a> <li>
          <li><a href="../t3r/Trainer3Room.php">Мусаханов Дамир</a> <li>
       
        </ul>
      </li>


      <li><a href="../../../admin/auth.php">Выход</a></li>
    </ul>

    <h1 style="color:#aaa;margin-left: -10px">Список Аманкелды Дианы</h1>

<?php
        $connect = mysqli_connect('localhost','root','root','test');
if(isset($_POST['search']))
{
    $full_name=$_POST['full_name'];
    $query="SELECT*FROM trainer2 WHERE full_name='$full_name'";
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
                       
                    
                        <td><a href="update.php?id=<?php echo $row['id'] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="delete.php?id=<?php echo $row['id'] ?>">Удалить</a></td>
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

            $trainer2 = mysqli_query($connect, "SELECT * FROM `trainer2`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $trainer2 = mysqli_fetch_all($trainer2);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - name
             * Ключ 2 - login
             * Ключ 3 - phone
             */

            foreach ($trainer2 as $trainer2) {
                ?>
                    <tr>
                        <td><?= $trainer2[0] ?></td>
                        <td><?= $trainer2[1] ?></td>
                        <td><?= $trainer2[2] ?></td>
                        <td><?= $trainer2[3] ?></td>
                       
                    
                        <td><a href="update.php?id=<?= $trainer2[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="delete.php?id=<?=  $trainer2[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>








          <form action="" method="POST">
 <input type="text" name="full_name"  required placeholder="Поиск по ФИО">
 <input type="submit" name="search" style="margin-left: 5px;" value="Искать">
        </form><br>














        <a href="../../Index.html">На главную страницу</a><br>
    </table>
 
        </div>
        <form action="create.php" method="post" >
    <h3 style=" color:#fff;">Новый Клиент</h3>
    <label style="color:#fff; ">ФИО</label>
        <input type="text" name="full_name" required placeholder="Введите полное имя"><br>
        <label style=" color:#fff;">Логин</label>
        <input type="text" name="login" required placeholder="Введите логин"><br>
        <label style=" color:#fff;">phone</label>
        <input type="text" name="phone" required placeholder="Введите  номер"><br>
        
        
        <br> <br>
        <button type="submit">Добавить 
    </form>
        
    
 
</body>
</html>
