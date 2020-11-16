<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<title>My Shop</title>
</head>
<body>
<header class="header">
	<div class="header-wrp">
		<div class="logo-wrp">
			<div class="logo"></div>
			<div class="logo-name">Brand</div>
		</div>
		<div class="menu-wrp">
			<ul class="menu">
				<a href="index.php" class="menu-link">главная</a>
				<a href="index.php?page=catalog" class="menu-link">каталог</a>
				<a href="#" class="menu-link">контакты</a>
				<a href="#" class="menu-link">о нас</a>
			</ul>
		</div>
		<div class="icon-wrp">
			<i class="far fa-user"></i>
			<i class="fas fa-shopping-basket"></i>
		</div>
	</div>
</header>
<main>
	<?php
		$page = $_GET['page'];
		if(!isset($page)) {
			include('modules/main.php');
		} elseif ($page == 'catalog') {
			include('modules/catalog.php');
		} elseif ($page == 'product') {
			include ('modules/product.php');
		}
	?>
</main>
<footer>
	<div class="footerInside">

		<div class="contacts">
			<div class="contactWrap">
				<img src="images/envelope.svg" class="contactIcon" alt="icon">
				info@brandshop.ru
			</div>
			<div class="contactWrap">
				<img src="images/phone-call.svg" class="contactIcon" alt="icon">
				8 800 555 00 00
			</div>
			<div class="contactWrap">
				<img src="images/placeholder.svg" class="contactIcon" alt="icon">
				Москва, пр-т Ленина, д. 1 офис 304
			</div>
		</div>

		<div class="footerNav">
			<a href="index.php">Главная</a>
			<a href="index.php?page=catalog">Каталог</a>
		</div>

		<div class="social">
			<img class="socialItem" src="images/vk-social-logotype.svg" alt="icon">
			<img class="socialItem" src="images/google-plus-social-logotype.svg" alt="icon">
			<img class="socialItem" src="images/facebook-logo.svg" alt="icon">
		</div>

		<div class="copyrights">&copy; Brand</div>
	</div>
</footer>
</body>
</html>

