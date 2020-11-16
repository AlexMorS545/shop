<h1 class="cat-title">Каталог товаров</h1>
<?php
	include_once ('modules/server.php');
	$sql = mysqli_query($connect, "SELECT * FROM catalog");
?>

<div class="products-wrp">

	<?php while ($product = mysqli_fetch_assoc($sql)):?>

		<div class="product">
			<img src="<?= $product['image']?>" alt="product photo" class="prod-img">
			<span class="prod-name"><?= $product['name']?></span>
			<span class="short-desc"><?= $product['short_desc']?></span>
			<span class="price"><?= $product['price']?></span>
			<a href="index.php?page=product&id=<?= $product['id']?>" class="prod-link">Подробнее</a>
		</div>

	<?php endwhile;?>

</div>
