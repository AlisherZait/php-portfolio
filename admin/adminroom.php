
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
    <title>adminroom</title>
    <link rel="shortcut icon" type="image/png" href="media/Img/logo.PNG"/>
   <style>
body {
  
  font-family: Montserrat;
  background-image: url(../../media/Img/adminroom.jpg);
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


<h1 style="color:#aaa;">Список Посетители</h1>

<?php
        $connect = mysqli_connect('localhost','root','root','test');
if(isset($_POST['search']))
{
    $full_name=$_POST['full_name'];
    $query="SELECT*FROM users WHERE full_name='$full_name'";
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

            $user = mysqli_query($connect, "SELECT * FROM `users`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $user = mysqli_fetch_all($user);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - name
             * Ключ 2 - login
             * Ключ 3 - phone
             */

            foreach ($user as $user) {
                ?>
                    <tr>
                        <td><?= $user[0] ?></td>
                        <td><?= $user[1] ?></td>
                        <td><?= $user[2] ?></td>
                        <td><?= $user[3] ?></td>
                       
                    
                        <td><a href="update.php?id=<?= $user[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="../admin/delete.php?id=<?=  $user[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>








          <form action="" method="POST">
 <input type="text" name="full_name"  required placeholder="Поиск по ФИО">
 <input type="submit" name="search" style="margin-left: 5px;" value="Искать">
        </form><br>














        <a href="../Index.html">На главную страницу</a><br>
    </table>
 
        </div>
        <form action="create.php" method="post" >
    <h3 style=" color:#fff;">Новый Посетитель</h3>
    <label style="color:#fff; ">ФИО</label>
        <input type="text" name="full_name" required placeholder="Введите полное имя"><br>
        <label style=" color:#fff;">Логин</label>
        <input type="text" name="login" required placeholder="Введите логин"><br>
        <label style=" color:#fff;">phone</label>
        <input type="text" name="phone" required placeholder="Введите  номер"><br>
        <label style="color:#fff;" >Пароль</label>
        <input type="password" name="password" required placeholder="Введите пароль"><br>
        
        <br> <br>
        <button type="submit">Добавить 
    </form>
        
    
 
</body>
</html>
