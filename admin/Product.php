<?php
//include_once ('../src/public/modules/server.php');
include_once ('../src/public/modules/config.php');

$products = allProducts($connect,'catalog');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$product = getProduct($connect, $id,'catalog');

if(isset($_POST['submit'])) {

  $name = trim(strip_tags($_POST['name']));
  $shortDesc = trim(strip_tags($_POST['short_desc']));
  $fullDesc = trim(strip_tags($_POST['full_desc']));
  $image = trim(strip_tags($_POST['image']));
  $price = (int)trim(strip_tags($_POST['price']));

  editProduct ($connect, $id, $name, $shortDesc, $fullDesc, $image, $price);

  header("Location: index.php");
  /*function translited($string) {
    $newStr = transliterator_transliterate("Russian-Latin/BGN", $string);
    return $res = strtr($string, $newStr);
  }*/
}



