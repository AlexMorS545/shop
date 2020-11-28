<?php
include_once ('../src/public/modules/config.php');

$products = getAllItems($connect,'catalog');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$product = getOneItem($connect, $id,'catalog');

function translited($string) {
  $newStr = transliterator_transliterate("Russian-Latin/BGN", $string);
  return $str = str_replace(" ", "_", $newStr);
}

if(isset($_POST['submit'])) {

  $name = trim(strip_tags($_POST['name']));
  $shortDesc = trim(strip_tags($_POST['shortDesc']));
  $fullDesc = trim(strip_tags($_POST['fullDesc']));
  $image = trim(strip_tags($_POST['name'].".jpg"));
  $price = (int)trim(strip_tags($_POST['price']));

  $filePath = $_FILES['image']['tmp_name'];
  $fileName = translited($_FILES['image']['name']);
  $type = $_FILES['image']['type'];

  editProduct ($connect, $id, $name, $shortDesc, $fullDesc, $image, $price);
  header("Location: index.php");

  if($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {

    if(move_uploaded_file($filePath, "../src/public/images/products/$fileName")) {
      $image = $fileName;
      if(isset($_POST['edit'])) {
        editProduct ($connect, $id, $name, $shortDesc, $fullDesc, $image, $price);
        header("Location: index.php");
      }
      if(isset($_POST['add'])) {
        newProduct ($connect, $name, $shortDesc, $fullDesc, $price, $image);
        header("Location: index.php");
      }
    }
  }
}



