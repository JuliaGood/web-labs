<?php
//старт сессии
    session_start();
    /*получаем с формы и сохраняем в соответствующих переменных введенные тему и текст отзыва*/
    if (isset($_POST['title'])) {
        $title = $_POST['title']; 
        if ($title == '') { 
             unset($title);
             }
         } 
       if (isset($_POST['text'])) { 
            $text=$_POST['text'];
            if ($text =='') { 
                 unset($text);
           }
        }
       //если пользователь не ввел тему или текст, то выдаем ошибку и останавливаем скрипт
       if (empty($title) or empty($text))    {
             exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
          }
       else {		
               //если тема и текст введены, то сохраняем сообщение в таблицу remarks бд travel
              // подключаемся к базе
              include ("dbconnect.php");
              //если не пуста переменная сессии, сохраняем ID текущего пользрвателя
              if (!empty($_SESSION['id'])) {
                   $userId=$_SESSION['id'];
                   // сохраняем данные
                   $result = $mysqli->query("INSERT INTO testimonials(user_id, title, text) VALUES ('$userId','$title','$text')");
                  // Проверяем, нет ли ошибки
                  //Перенаправляем пользователя на страницу просмотра отзывов
                  echo "Ваше сообщение сохранено! Перейти к просмотру сообщений. <a href='contacts.php'>О нас</a>";           
            }
          }
    ?>
