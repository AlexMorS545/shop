<?php
include_once ('config.php');
include_once ('configBasket.php');

if (isset($_POST['basketId'])) {

  $id = (int)$_POST['basketId'];

  $item = getOneItem ($connect, $id, 'catalog');

  $name = $item['name'];
  $desc = $item['short_desc'];
  $price = $item['price'];
  $image = $item['image'];
  $discount = $item['discount'];

  $itemBasket = getOneItem($connect, $id, 'basket');
  $_SESSION['basket'] = 1;

  if (isset($itemBasket)) {
    $id = $itemBasket['id'];
    $count = $itemBasket['count'];
    $count++;
    editItemBasket($connect, $id, $count);
  } else {
    newProductInBasket($connect, $id, $name, $desc, $price, $image, '1', $discount);
  }

  echo json_encode($itemBasket);
}
$itemsBasket = getAllItems($connect, 'basket');
