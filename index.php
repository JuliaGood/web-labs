<?php
	//Стартуємо сесію
	session_start();
?>
<?php include_once('tpl/header.php'); ?>

	<!-- Page Content -->
	<main class="flex" id="main">
		<div class="container">

			<div class="row">
				<div class="col" id="top-text">
					<p>
						Концепція відпочинку з нашою компанією – кращі пропозиції для Вашої родини
					</p>
					<p>Акції та знижки</p>
				</div>
			</div>

			<div class="row">
				<?php
						//выполняем подключение к БД
						include ("dbconnect.php");// файл dbconnect.php должен быть в той же папке
						//получаем все данные, имеющиеся в таблице tours
						$tours = $mysqli->query("SELECT * FROM tours"); 

						while ($tour = $tours->fetch_assoc()) { 
						?>
							<div class="col card-center"> 
								<div class="card" style="width: 20rem;">
									<img src="<?php echo $tour['photo']; ?>" class="card-img-top" alt="<?php echo $tour['name']; ?>">
									<div class="card-body">
										<h5 class="card-title"><?php echo $tour['name']; ?></h5>
										<a href="tour.php?id=<?php echo $tour['id']; ?>" class="btn btn-primary">Докладніше</a>
									</div>
								</div>
							</div>
						<?php } ?>
				</div>
				
		</div>
	</main>

	<?php include_once('tpl/footer.php'); ?>