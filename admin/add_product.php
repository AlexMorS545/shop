<?php
include_once ('Product.php');
?>
<div class="admin-form-wrp">
  <form action="" method="post" enctype="multipart/form-data" class="admin-form">
    <div class="desc-wrp">
      <lable>Название товара:<br><input type="text" name="name" maxlength="100"></lable>
      <lable>Короткое описание:<br><input type="text" name="shortDesc"></lable>
      <p>Полное описание:</p><br>
      <textarea name="fullDesc" rows="10"></textarea>
      <lable>Цена:<br><input type="text" name="price"></lable>
      <lable>Загрузите картинку:<br><input type="file" name="image" accept="image/jpeg, image/png, image/gif"></lable>
			<input type="hidden" name="add">
			<button class="admin-form-btn btn" type="submit" name="submit">Сохранить</button>
    </div>
  </form>
</div>