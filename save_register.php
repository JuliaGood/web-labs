<?php
    /*зберігаємо введене користувачем у формі ім'я в змінну $name, якщо вона порожня, то знищуємо змінну*/
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if ($name == '') {
            unset($name);
            }
        }
     /*зберігаємо введений користувачем у формі логін у змінну $login, якщо він порожній, то знищуємо змінну*/
     if (isset($_POST['login'])) {
         $login = $_POST['login'];
         if ($login == '') {
             unset($login);
             }
        }
     /*зберігаємо введений користувачем пароль у формі в змінну $pass, якщо він порожній, то знищуємо змінну*/
      if (isset($_POST['password'])) {
          $pass=$_POST['password'];
          if ($pass == '') {
              unset($pass);
             }
        }
    /*якщо користувач не ввів логін чи пароль, то видаємо помилку та зупиняємо скрипт*/
   if (empty($login) OR empty($pass))
   {
        exit ("Ви ввели не всю інформацію, поверніться назад і заповніть всі поля!");
   }
   /*підключаємося до бази даних, виконуємо тут раніше створений файл dbconnect.php*/
    include ("dbconnect.php");
   
/* Перевіряємо існування в базі даних користувача з таким самим логіном. Шукаємо в таблиці users рядок, де логін збігається з тим, який ввів користувач, і якщо знаходимо, то зберігаємо його ID в змінній $result*/
    $result = $mysqli->query("SELECT ID FROM users WHERE login='$login' ");

    //Перетворимо отриманий набір даних в асоціативний масив. */
    $myrow = $result->fetch_assoc();

    /*Перевіряємо, чи не пусто в цьому асоціативному масиві значення поля з ключем ID. Якщо не порожньо, такий користувач вже є в базі даних*/
    if (!empty($myrow['ID'])) {
          exit ("Введений вами логін вже зареєстрований. Введіть інший логін.");
        }
    // якщо такого немає, зберігаємо дані нового користувача в таблицю users
    $result2 = $mysqli->query ("INSERT INTO users (Name, Login, Password) VALUES('$name','$login','$pass')");

    // Перевіряємо, чи є помилки
    if ($result2=='TRUE') {
         echo "Ви успішно зареєстровані! Тепер ви можете зайти на сайт під своїм ім'ям. <a href='index.php'>Головна сторінка</a>";
        }
   else {
         echo "Помилка! Ви не зареєстровані.";
       }
?>
