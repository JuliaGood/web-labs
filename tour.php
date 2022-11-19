<?php include ('tpl/header.php'); ?>	   
   <main class="flex">
      <div class="row">
          <div class="col">
            Актуальная информация о туре:
          </div>
      </div>
      <div class="container-fluid">
      <?php
      //Подключаемся к базе данных
      include ("dbconnect.php");
      /*Получаем из URL страницы id именно того тура, информацию о котором нужно разместить на этой странице сейчас*/

      if (!empty($_GET['id'])) {
        $tourId = $_GET['id'];

        /*Выполняем запрос к таблице tours БД, чтобы получить все сведения о туре с данным id*/
        $tours = $mysqli->query("SELECT * FROM tours WHERE id='$tourId'");
        /*Преобразуем строку, полученную в результате запроса в ассоциативный массив, чтобы можно было обращаться к каждому значению по имени поля в таблице*/
        $tour = $tours->fetch_assoc();
        /*Формируем переменную, содержащую структуру выводимых значений*/
        $div = '<div class="row">';
        $div .= '<div class="col"><div class="country">';
        $div .= '<img src='.$tour['photo'].'>';
        $div .= '<p>'.$tour['name'].'</p>';
        $div .= '<p>'.$tour['programm'].'</p>';
        $div .= '</div></div>';
        $div .= '</div>';

        //Выводим содержимое этой переменной
        echo $div;
      } else {
        echo 'Тур не знайдено';
      }
      ?>   
      </div>
    </main>

<?php include_once('tpl/footer.php'); ?>