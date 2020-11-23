<?php ob_start();?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="../src/public/css/style.css">
  <title>Admin</title>
</head>
<body>
<header class="admin-header">
	<div class="header-wrp">
		<div class="logo-wrp">
			<div class="logo"></div>
			<div class="logo-name">Brand</div>
		</div>
		<div class="menu-wrp">
			<ul class="menu">
				<a href="index.php" class="menu-link">главная</a>
				<a href="index.php?page=add_product" class="menu-link">Добавить товар</a>
			</ul>
		</div>
		<div class="icon-wrp">
			<i class="far fa-user"></i>
		</div>

		<div class="user-wrp hidden" data-close="true">
			<div class="user">
				<i class="far fa-window-close" data-close="true"></i>
				<form action="#" class="user-form">
					<input type="text" class="name" placeholder="Ваш логин">
					<input type="email" class="email" placeholder="Ваш email">
					<input type="password" class="pass" placeholder="Ваш пароль">
					<button class="user-btn">Регистрация</button>
				</form>
			</div>
		</div>

	</div>
</header>
<?php

$page = $_GET['page'];
if(!isset($page)) {
	include_once ('main.php');
} elseif ($page == 'edit') {
	include_once ('edit.php');
} elseif ($page == 'delete') {
	include_once ('delete.php');
} elseif ($page == 'add_product') {
	include_once ('add_product.php');
}

?>

<script src="../src/public/js/main.js"></script>
</body>
</html>
