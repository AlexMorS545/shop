<?php
include_once ('modules/server.php');
$sql = mysqli_query($connect, "SELECT * FROM catalog");
?>

<div class="item-wrp">

<?php while ($item = mysqli_fetch_assoc($sql)):?>
  <?php if($item['id'] == $_GET['id']):?>
    <div class="item">
      <img src="<?= $item['image']?>" alt="item photo" class="item-img">
			<div class="desc">
				<span class="item-name"><?= $item['name']?></span>
				<p class="item-desc"><?= $item['full_desc']?></p>
				<span class="item-price"><?= $item['price']?></span>
				<button class="item-btn">Купить</button>
			</div>
    </div>
  <? endif;?>
<?php endwhile;?>

</div>