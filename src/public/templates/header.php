<?php
session_start();
include_once ('modules/basket.php');
$itemBasket = getOneItem ($connect, $id, 'basket');
?>
<div class="header-wrp">
  <div class="logo-wrp">
    <div class="logo"></div>
    <div class="logo-name">Brand</div>
  </div>
  <div class="menu-wrp">
    <ul class="menu">
      <a href="index.php" class="menu-link">главная</a>
      <a href="index.php?page=catalog" class="menu-link">каталог</a>
      <a href="index.php?page=review" class="menu-link">отзывы</a>
      <a href="#" class="menu-link">о нас</a>
    </ul>
  </div>
  <div class="icon-wrp">
		<?php if(!isset($_SESSION['login'])):?>
			<a class="user-name"><i class="far fa-user"></i></a>
		<?php else: ?>
			<a class="user-name"><?= $_SESSION['login'];?></a>
		<?php endif;?>
			<i class="fas fa-shopping-basket"></i>
  </div>

	<div class="user-wrp hidden" data-close="true">
		<div class="user">
			<i class="far fa-window-close" data-close="true"></i>
			<form action="modules/users.php" method="post" class="user-form">
        <?php if(!isset($_SESSION['login'])):?>
					<input type="text" class="name" placeholder="Ваш логин" name="name" required>
					<input type="email" class="email" placeholder="Ваш email" name="email" required>
					<input type="password" class="pass" placeholder="Ваш пароль" name="pass" required>
					<div class="btn-wrp">
					<button class="user-btn btn" name="enter">Войти</button>
					<button class="user-btn btn" name="reg">Регистрация</button>
				<?php else: ?>
					<h2 class="cat-title"><?=$_SESSION['login']?></h2>
					<button class="user-btn btn" name="exit">Выйти</button>
				<?php endif;?>
				</div>
			</form>
		</div>
	</div>

	<div class="basket-wrp hidden" data-close="true">
		<div class="basket">
			<i class="far fa-window-close" data-close="true"></i>
			<?php include_once ('templates/cart.php')?>
		</div>
	</div>

</div>
