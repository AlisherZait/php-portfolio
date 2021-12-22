<?php
session_start();
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title>связаться с нами</title>
        <link rel="stylesheet" type="text/css" href="../CSS/2css.css">
        <link rel="shortcut icon" type="image/png" href="../media/Img/logo.PNG"/>

<title>Простейшая и крутейшая форма</title>
</head>
<body >

    <div class="header">
    <div class="admn" style="margin-left:1200px;margin-top: -10px;">
        <a href="../admin/auth.php"><img rel="shortcut icon" src="../media/Img/enter.png"style="width: 80px; height: 30px; margin-top:5px;" ></a>
    </div>
        <div class="logo">
        <img src="../media/Img/logo.PNG">
        </div>
        <div class="logifont">
            <h1 >Фитнес<br>
                   клуб</h1>
        </div>
        <div class="menu">
            <ul id="navbar">
            <li><a href="../Index.html">Главное</a></li>
            <li><a href="../html/3str.html">Расписание</a></li>
            <li> <a href="#">Cвязаться</a></li>
        </ul>
        </div>
    </div>  


    <form id="form" action="send.php" method="post">
        <h2>Пишите письмо к нам на почту или по ссылке перейдите на whatsApp !</h2>
     <fieldset>
        <p>
         <label for="name">* Имя</label>
         <input type="text" name="name" id="name"required placeholder="Ваше имя" size="30" />
        </p>
        <p>
        <label for="email">* Email</label>
        <input type="email" name="email" id="email" required placeholder="Ваша почта" size="30" />
        </p>
        <p>
        <label for="web">Тел.номер</label>
        <input type="tel" name="phone" id="web" required placeholder="Ваш номер" size="30" />
        </p>
     </fieldset>
     <fieldset>                                                                                                                                                   
        <p>
        <label for="message">* Сообщение:</label>
        <textarea name="message" id="message"required placeholder="Ваш вопрос" cols="30" rows="10"></textarea>
       </p>                                                               
     </fieldset>    
          <div class="ccd">
  
<a href="https://wa.me/77473146878?text=Здравствуйте!%20я%20бы%20хотел(а)%20у%20вас%20спросить%20на%20счет%20... " class="ddott">whatsApp</a>
</div>
       <p class="submit"><button type="submit">Отправить на почту</button></p>    
                    
     </form>
    </fieldset>

    <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
</form>





















        

<div class="footer">
    <div class="podval1"style="color:red">
    <h2>Информация о нас</h2><br>
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2907.234420049732!2d76.86251706279357!3d43.22554452130212!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836c26c614da2f%3A0xa4158d8032cd7bd!2sMagnum!5e0!3m2!1sru!2skz!4v1616321041537!5m2!1sru!2skz" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br>
     Наш офис находится по адресу <br>
     микрорайон 1/10 Казахстан, г. Алматы. <br>        
     Время работы : с 10:00 до 20:00<br>
    
   </div>

   <div class="podval2"style="color:red">
     <h2>Наши друзья:</h2>
     Бойцовский клуб " СУНКАР"<br>
     Бойцовский клуб "CAGE FIGHTER"<br>
     Бойцовский клуб "ALASH PRIDE" <br> 
     Новостной портал "MMANEWS.KZ"<br>
     Сеть тренажерных залов " БАНЗАЙ"<br>
     Сеть фитнес-клубов "WORLD CLASS"<br>
   </div>

   <div class="podval3"style="color:red">
   <h2>Контактная информация</h2><br>
     <a href="https://www.instagram.com/toxic.alishka"><img src="../media/Img/inst.JPG" 
      style="width: 160px; height:45px ;" ></a><br>
     <a href="https://wa.me/77473146878?text=Здравствуйте!%20"><img src="../media/Img/whats.JPG" 
      style="width: 160px; height:45px ;" ></a><br>
     <a href="https://www.tiktok.com/@alishka136?lang=ru-RU"><img src="../media/Img/тикток.png" 
      style="width: 160px; height:45px;" ></a><br>
            Эл.почта:alisher.zait.99@mail.ru<br>
            Рабочий номер: 8(747)314-68-78<br>
            call центр: 8(727)914-05-55<br>
            call центр: 8(727)914-05-55<br>
            call центр: 8(727)914-05-55<br>
   </div>

</div>


<script src="../JS/2str.js"> </script>

</body>
</html>
    </body>
</html>