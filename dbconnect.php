<?php
//Створюємо нове підключення до сервера localhost та бази даних travel на ньому. 
//Якщо Ви не вказували нічого додатково при створенні вашої бази даних, ім'я користувача буде –root, а пароля не буде
  $mysqli = new mysqli('localhost', 'root', '', 'travel');
//Перевіряємо, чи пройшло підключення без помилок
  if ($mysqli->connect_error) {
    die('Connect Error ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
  }
?>
