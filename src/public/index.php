<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>My Shop</title>
</head>
<body>
	<div id="app">
		<header class="header">
			<?php include("templates/header.php");?>
		</header>
		<main>
			<?php
				$page = $_GET['page'];
					if(!isset($page)) {
						include('templates/main.php');
					} elseif ($page == 'catalog') {
						include('templates/catalog.php');
					} elseif ($page == 'item') {
						include('templates/item.php');
					} elseif ($page == 'review') {
						include('templates/review.php');
					}
			?>
		</main>
		<footer>
			<?php include('templates/footer.php');?>
		</footer>
		<script src="https://cdn.jsdelivr.net/npm/vue"></script>
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/app.js"></script>
	</div>
</body>
</html>