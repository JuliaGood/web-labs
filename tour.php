<?php include ('tpl/header.php'); ?>	 

  <main class="flex">
    <div class="container">

      <div class="row" id="title-text">
        <div class="col">
          Актуальна інформація про тур:
        </div>
      </div>

      <?php
      //Подключаемся к базе данных
      include ("dbconnect.php");
      /*Получаем из URL страницы id именно того тура, информацию о котором нужно разместить на этой странице сейчас*/
      if (!empty($_GET['id'])) {
        $tourId = $_GET['id'];
        /*Выполняем запрос к таблице tours БД, чтобы получить все сведения о туре с данным id*/
        $tours = $mysqli->query("SELECT * FROM tours WHERE id='$tourId'");
        /*Преобразуем строку, полученную из запроса в массив, чтобы обращаться к каждому значению по имени поля в таблице*/
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