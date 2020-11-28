<?php
	include_once ('modules/config.php');
?>
<h1 class="cat-title">Каталог товаров</h1>
<div class="products-wrp">
	<?php
		$products = getAllItems($connect, 'catalog');
	?>
		<?php if($products):?>
			<?php foreach ($products as $product):?>
				<div class="product">
					<a href="index.php?page=item&id=<?= $product['id']?>" class="img-link">
						<img src="images/products/<?= $product['image']?>" alt="<?= $product['name']?> photo" class="prod-img">
					</a>
					<span class="prod-name"><?= $product['name']?></span>
					<span class="short-desc"><?= $product['short_desc']?></span>
					<span class="price"><?= $product['price']?></span>
					<a href="index.php?page=item&id=<?= $product['id']?>" class="prod-link">Подробнее</a>
				</div>
			<?php endforeach;?>
		<?php endif;?>
</div>