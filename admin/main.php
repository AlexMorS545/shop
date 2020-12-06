<?php
include_once ('../src/public/modules/config.php');
$products = getAllItems($connect, 'catalog');
?>

<div class="products-wrp">
  <?php if($products):?>
    <?php foreach ($products as $product):?>
      <div class="product">
        <a href="index.php?page=edit&id=<?= $product['id']?>" class="img-link">
          <img src="../src/public/images/products/<?= $product['image']?>" alt="product photo" class="prod-img">
        </a>
        <span class="prod-name"><?= $product['name']?></span>
        <span class="short-desc"><?= $product['short_desc']?></span>
        <span class="price"><?= $product['price']?></span>
				<a href="index.php?page=edit&id=<?= $product['id']?>" class="prod-link btn">Изменить</a>
				<a href="index.php?page=delete&id=<?= $product['id']?>" class="prod-link btn">Удалить</a>
      </div>
    <?php endforeach;?>
  <?php endif;?>
</div>
