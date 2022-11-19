<?php include_once('tpl/header.php'); ?>

    <h2>Реєстрація</h2>

      <!--Початок форми реєстрації. save_user.php – це адреса оброблювача. Тобто після натискання на кнопку "Зареєструватися" дані з полів будуть передані файлу save_user.php методом "post" -->
     <form action="save_register.php" method="post">
       <!--У текстове поле з ім'ям name користувач вводить своє ім'я -->
      <p>
          <label>Ваше ім'я:<br></label>
          <input name="name" type="text" size="15" maxlength="15">
       </p>
      <!-- У текстове поле з іменем login користувач вводить свій логін -->
      <p>
           <label>Ваш логін:<br></label>
           <input name="login" type="text" size="15" maxlength="15">
       </p>
       <!--У полі для паролів з ім'ям pass користувач вводить свій пароль -->
       <p>
           <label>Ваш пароль:<br></label>
           <input name="password" type="password" size="15" maxlength="15">
       </p>
       <!--Кнопкою (type="submit") користувач зможе відправити дані на обробку файлу save_user.php -->
       <p>
          <input type="submit" name="submit" value="Зареєструватися">
       </p>
   </form>
  </body>
</html>

<?php include_once('tpl/footer.php'); ?>