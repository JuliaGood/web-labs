<?php
//Обов'язково запускаємо сесію!
   session_start();
//Зберігаємо введені користувачем логін та пароль у змінні $login та $pass
    if (isset($_POST['login'])) {
         $login = $_POST['login'];
         if ($login == '') {
             unset($login);
            }
       }
    if (isset($_POST['password'])) {
         $pass=$_POST['password'];
         if ($pass =='') {
               unset($pass);
             }
        }
     //якщо користувач не ввів логін або пароль, то видаємо помилку та зупиняємо скрипт
    if (empty($login) or empty($pass)) {
       exit ("Ви ввели не всю інформацію, поверніться назад і заповніть всі поля!");
      }
// Підключаємося до бази
    include ("dbconnect.php");
 //витягуємо з бази всі дані про користувача з введеним логіном
    $result = $mysqli->query("SELECT * FROM users WHERE login='$login'");
//поміщаємо ці дані в асоціативний масив
    $myrow = $result->fetch_assoc();
//Перевіряємо, чи існує користувач з таким логіном
    if (empty($myrow['Login'])) {
         exit ("Введений вами login або пароль неправильний");
        }
    else {
         //якщо користувач у базі існує, то звіряємо паролі
         if ($myrow['Password']==$pass) {
             //якщо паролі збігаються, то запускаємо користувачеві сесію. Це означає, що у спеціальних сесійних змінних зберігаються важливі відомості про цього користувача, в даному випадку – ID та логін*/
             $_SESSION['login']=$myrow['Login'];
             $_SESSION['id']=$myrow['ID'];
            //Виводяться відповідні повідомлення користувачеві
            echo "Ви успішно увійшли на сайт! <a href='index.php'>Головна сторінка</a>";
          }
      else {
         //якщо паролі не зійшлися
         exit ("Введений вами login або пароль неправильний");
         }
    }
?>
