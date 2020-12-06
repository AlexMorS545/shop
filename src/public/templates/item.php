<?php
if(isset($_GET['id'])) {
	$id = (int)($_GET['id']);
}
include_once('modules/config.php');
$item = getOneItem($connect, $id, 'catalog');
?>

<div class="item-wrp">

	<div class="item">
		<img src="images/products/<?= $item['image']?>" alt="<?= $item['name']?> photo" class="item-img">
		<div class="desc">
			<span class="item-name"><?= $item['name']?></span>
			<span class="short-desc-item"><?= $item['short_desc']?></span>
			<p class="item-desc"><?= $item['full_desc']?></p>
			<span class="item-price"><?= $item['price']?></span>
			<a href="modules/basket.php?id=<?= $item['id']?>" class="item-btn btn">Купить</a>
		</div>
	</div>

</div>