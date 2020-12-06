<?php
session_start();
include_once ('modules/basket.php');
?>
<?php if (isset($itemsBasket)):?>
  <?php foreach ($itemsBasket as $item):?>
    <div class="basket-item">
      <img class="basket-img" src="images/products/<?= $item['image']?>" alt="<?= $item['name']?> photo">
      <div class="cart-name-wrp">
        <span class="basket-name"><?= $item['name']?></span>
        <span class="basket-desc"><?= $item['short_desc']?></span>
      </div>
      <div class="count-wrp">
        <i class="fas fa-plus" onclick="addToBasket(<?= $item['id']?>)"></i>
        <span class="basket-count"><?= $item['count']?></span>
        <i class="fas fa-minus"></i>
      </div>
      <span class="basket-price"><?= $item['price'] * $item['count']?></span>
    </div>
  <?php endforeach;?>
<?php else:?>
  <h3 class="cart-title">Ваша корзина пуста</h3>
<?php endif;?>
