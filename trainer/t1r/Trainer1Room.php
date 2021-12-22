<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../../vendor/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrainerRoom</title>
   


   <style>
body {
  
    font-family: Montserrat;

  background-color: #000000;
background-image: linear-gradient(147deg, #000000 45%, #04619f 70%);
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

<body style="margin-left: 500px">


<h1 style="color:#aaa;margin-left: 20px">Список Зайт Алишерa</h1>



<?php
        $connect = mysqli_connect('localhost','root','root','test');
if(isset($_POST['search']))
{
    $full_name=$_POST['full_name'];
    $query="SELECT*FROM trainer1 WHERE full_name='$full_name'";
    $query_run=mysqli_query($connect,$query);
    while($row=mysqli_fetch_array( $query_run))
    {
        ?>
        <div class="table" style="margin-left: -20px;">
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

                       
                    
                        
                    </tr>
               
        <?php
    }
}

    ?>











<div class="table" с>
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

            $trainer1 = mysqli_query($connect, "SELECT * FROM `trainer1`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $trainer1 = mysqli_fetch_all($trainer1);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - name
             * Ключ 2 - login
             * Ключ 3 - phone
             */

            foreach ($trainer1 as $trainer1) {
                ?>
                    <tr>
                        <td><?= $trainer1[0] ?></td>
                        <td><?= $trainer1[1] ?></td>
                        <td><?= $trainer1[2] ?></td>
                        <td><?= $trainer1[3] ?></td>
                       

                        
                    </tr>
                <?php
            }
        ?>








          <form action="" method="POST" style="margin-left: -10px;">
 <input type="text" name="full_name"  required placeholder="Поиск по ФИО">
 <input type="submit" name="search" style="margin-left: 5px;" value="Искать">
        </form><br>














        <a href="../../Index.html">На главную страницу</a><br>
    </table>
 
        </div>
 
</body>
</html>
