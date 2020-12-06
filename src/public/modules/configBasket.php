<?php
include_once ('config.php');

function editItemBasket($connect, $id, $count){


  $sql = "UPDATE basket SET count=$count WHERE id='%d'";

  $query = sprintf($sql, $id);

  $result = mysqli_query($connect, $query);

  if(!$result) {
    die(mysqli_error($connect));
  }

  return mysqli_affected_rows($connect);
}

function newProductInBasket ($connect, $id, $name, $desc, $price, $image, $count, $discount) {

  $sql = "INSERT INTO `basket` (id, name, short_desc, price, image, count, discount) VALUES ('%d', '%s', '%s', '%s', '%s', '%s', '%s')";

  $query = sprintf($sql, mysqli_real_escape_string($connect, $id), mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $desc), mysqli_real_escape_string($connect, $price), mysqli_real_escape_string($connect, $image), mysqli_real_escape_string($connect, $count), mysqli_real_escape_string($connect, $discount));

  $res = mysqli_query($connect, $query);

  if(!$res) {
    die(mysqli_error($connect));
  }

  return true;
}