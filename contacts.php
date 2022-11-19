<?php include_once('tpl/header.php'); ?>

	<!-- Page Content -->
	<main class="flex">
		<div class="container">
			<div id="top-text">
				<p>
					Наша адреса: м. Запоріжжя, вул Космічна,17
				</p>

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
