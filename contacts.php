<?php include_once('tpl/header.php'); ?>

	<!-- Page Content -->
	<main class="flex">
		<div class="container">
			<div id="top-text">
				<p>
					Наша адреса: м. Запоріжжя, вул Космічна,17
				</p>
				<p>
					Для зв’язку з нами заповніть форму:
				</p>
			</div>

			<form method="get" action="#">
				<div class="form-group">
					<label for="userName">Ваше ім’я:</label>
					<input type="text" class="form-control" id="userName" placeholder="John Dou">
				</div>
				<div class="form-group">
					<label for="userPhone">Ваш телефон:</label>
					<input type="text" class="form-control" id="userPhone" placeholder="123-456-7890">
				</div>
				<div class="form-group">
					<label for="userEmail">Ваша електронна адреса:</label>
					<input type="email" class="form-control" id="userEmail" placeholder="name@example.com">
				</div>
				<div class="form-group">
					<label for="userText">Ваше повідомлення:</label>
					<textarea class="form-control" id="userText" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Відправити</button>
			</form>


			<?php
     //Подключаем базу данных
     include ("dbconnect.php");
     //Получаем все строки, которые есть в таблице remarks
     $result = $mysqli->query("SELECT * FROM testimonials"); 
     //Начинаем строить таблицу, присваиваем ей имя $table
     $table = "<table>";
     //Начинаем вести счетчик отзывов (строк в таблице)
     $k=1; 
     //Начинаем цикл, позволяющий вывести все отзывы из таблицы remarks 
     while($myrow = $result->fetch_assoc())  {
                 $table .= "<tr>";
                 $table .= "<td>".$myrow['title']."</td>";
                 $table .= "<td>".$myrow['text']."</td>";
                 $table .= "</tr>";
                $k++;
            }
     //Закрываем таблицу
     $table .= "</table>";
     //Выводим сформированную таблицу
     echo $table;
  ?>


		</div>
	</main>
	
	<?php include_once('tpl/footer.php'); ?>