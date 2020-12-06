<?php
include_once ('Product.php');
?>
<div class="admin-form-wrp">
  <form action="" method="post" enctype="multipart/form-data" class="admin-form">
    <img src="../src/public/images/products/<?=$product['image']?>" alt="<?= $product['name']?>" name="image">
    <div class="desc-wrp">
      <lable>Название товара:<br><input type="text" name="name" maxlength="100" value="<?= $product['name']?>"></lable>
      <lable>Короткое описание:<br><input type="text" name="shortDesc" value="<?= $product['short_desc']?>"></lable>
      <p>Полное описание:</p><br>
      <textarea name="fullDesc" rows="10"><?= $product['full_desc']?></textarea>
      <lable>Цена:<br><input type="text" name="price" value="<?= $product['price']?>"></lable>
      <lable>Изменить картинку:<br><input type="file" name="image" accept="image/jpeg, image/png, image/gif"></lable>
      <input type="hidden" name="edit" value="<?= $product['id']?>">
      <button class="admin-form-btn btn" type="submit" name="submit">Сохранить</button>
    </div>
  </form>
</div>
