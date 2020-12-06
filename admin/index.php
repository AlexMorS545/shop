<?php
ob_start();
session_start();
?>
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
<?php if(isset($_SESSION['login']) == 'admin' && isset($_SESSION['pass']) == 'admin'):?>
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
					<a href="index.php?page=orders" class="menu-link">Заказы</a>
				</ul>
			</div>
			<div class="icon-wrp">
        <?php if(!isset($_SESSION['login'])):?>
					<a class="user-name"><i class="far fa-user"></i></a>
        <?php else: ?>
					<a class="user-name"><?= $_SESSION['login'];?></a>
        <?php endif;?>
			</div>

			<div class="user-wrp hidden" data-close="true">
				<div class="user">
					<i class="far fa-window-close" data-close="true"></i>
					<form method="post" action="adminUser.php" class="user-form">
            <?php if(!isset($_SESSION['login'])):?>
						<input type="text" class="name" placeholder="Ваш логин" name="name" required>
						<input type="email" class="email" placeholder="Ваш email" name="email" required>
						<input type="password" class="pass" placeholder="Ваш пароль" name="pass" required>
						<div class="btn-wrp">
							<button class="user-btn btn" name="enter">Войти</button>
							<button class="user-btn btn" name="reg">Регистрация</button>
              <?php else: ?>
								<h2 class="cat-title"><?=$_SESSION['login']?></h2>
								<button class="user-btn btn" name="adminExit">Выйти</button>
              <?php endif;?>
						</div>
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
<?php else:?>
	<h2>Вы не админ или войдите в аккаунт администратора</h2>
<?php endif;?>
<script src="../src/public/js/jquery-3.5.1.min.js"></script>
<script src="../src/public/js/main.js"></script>
<script src="../src/public/js/app.js"></script>
</body>
</html>
