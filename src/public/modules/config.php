<?php
include_once ('server.php');

function allProducts ($connect, $table) {

  $sql = "SELECT * FROM `{$table}` ORDER BY id DESC";
  $result = mysqli_query($connect, $sql);

  if (!$result) {
    die(mysqli_error($connect));
  }

  while ($data = mysqli_fetch_assoc($result)) {
    $products[] = $data;
  }
  return $products;
}

function getProduct ($connect, $id, $table) {

  $sql = sprintf("SELECT * FROM `{$table}` WHERE id=%d", (int)$id);
  $result = mysqli_query($connect, $sql);

  if(!$result) {
    die(mysqli_error($connect));
  }

  $item = mysqli_fetch_assoc($result);

  return $item;
}

function newProduct ($connect, $name, $shortDesc, $fullDesc, $price) {

  $str = "INSERT INTO catalog (name, short_desc, full_desc, price) VALUES (%s, %s, %s, %d)";

  $query = sprintf($str, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $shortDesc), mysqli_real_escape_string($connect, $fullDesc), mysqli_real_escape_string($connect, $price));

  $res = mysqli_query($connect, $query);

  if(!$res) {
    die(mysqli_error($connect));
  }

  return true;
}

function editProduct ($connect, $id, $name, $shortDesc, $fullDesc, $image, $price) {
  $id = (int)$id;

  $sql = "UPDATE catalog SET name='%s', short_desc='%s', full_desc='%s', price='%s', image='%s' WHERE id='%d'";

  $query = sprintf($sql, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $shortDesc), mysqli_real_escape_string($connect, $fullDesc), mysqli_real_escape_string($connect, $price),mysqli_real_escape_string($connect, $image), $id);

  $res = mysqli_query($connect, $query);
  if(!$res) {
    die(mysqli_error($connect));
  }

  return mysqli_affected_rows($connect);
}