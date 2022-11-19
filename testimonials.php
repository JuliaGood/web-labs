<?php include_once('tpl/header.php'); ?>

      <h2>Залишіть свій відгук</h2>
      
      <form action="save_testimonials.php" method="post">
        <!-- У текстову область (name="tema") користувач вводить тему свого відкликання -->
        <p>
            <label>Тема повідомлення:<br></label>
            <textarea name="title" cols="38" rows="3"></textarea>
        </p>
        <!--У текстову область (name="text") користувач вводить текст свого відгуку-->
        <p>
            <label>Введіть текст повідомлення:<br></label>
            <textarea name="text" cols="38" rows="6"></textarea>
        </p>
        <!--Кнопка надсилає дані на сторінку-обробник save_remarks.php --->
        <p>
            <input type="submit" name="submit" value="Зберегти">
        </p>
    </form>

<?php include_once('tpl/footer.php'); ?>
