<?php include_once('tpl/header.php'); ?>

    <h2>Авторизація</h2>
    <!--Початок форми авторизації. test_user.php – це адреса обробника. Тобто після натискання на кнопку "Увійти" дані з полів передаються обробнику test_user.php методом "post" -->
    <form action="save_login.php" method="post">
<!--У текстове поле з іменем login користувач вводить свій логін -->
      <p>
          <label>Ваш логін:<br></label>
          <input name="login" type="text" size="15" maxlength="15">
      </p>
<!-- У полі для паролів з ім'ям pass користувач вводить свій пароль -->
      <p>
          <label>Ваш пароль:<br></label>
          <input name="password" type="password" size="15" maxlength="15">
      </p>
<!--Кнопка (type="submit") надсилає дані обробнику test_user.php -->
      <p>
         <input type="submit" name="submit" value="Увійти">
      </p>
   </form>

<?php include_once('tpl/footer.php'); ?>
