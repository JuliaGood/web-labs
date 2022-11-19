<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Сайт туристичної компанії</title>
	<!-- Bootstrap CSS -->
	<!-- Підключаемо CSS bootstrap локально -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">

</head>

<body class="body-top">

	<!-- Header & Navigation -->
	<header>

		<div class="container">

		<?php
    // Якщо користувач ще не авторизований на сайті, його змінні сесії (ми організуємо їх пізніше) поки порожні, потрібно вивести посилання на реєстрацію або авторизацію */
    	if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <!--скрипт переривається і слідує звичайний html код -->
    <div id="auth_block">
    	<div id="link_register">
        <a href="register.php">Реєстрація</a>
      </div>
      <div id="link_auth">
        <a href="login.php">Авторизація</a>
      </div>
    </div>
    <!--скрипт знову починається щоб обробити варіант else -->
    <?php
    }
    // Якщо користувач вже авторизований, потрібно виводити посилання на сторінку, де можна залишити відгук або на сторінку, яка дозволить вийти з авторизації
    else {
    ?>
    	<div id="exit_block">
				<div id="link_remark">
					<a href="testimonials.php">Ви можете залишити відгук</a>
			  </div>
				<div id="link_exit">
					<a href="exit.php">Вихід</a>
			  </div>
    	</div>
		<?php
			}
		?>


			<div class="row">
				<div class="col-3">
					<img id="logo" src="img/logo.png" />
				</div>
				<div class="col-9">
					<h1>Подорожуйте з нами!</h1>
				</div>
			</div>

			<?php include_once('tpl/nav.php'); ?>
		</div>

	</header>