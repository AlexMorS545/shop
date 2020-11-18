<?php
include_once ('server.php');

function allProducts ($connect) {

  $sql = "SELECT * FROM catalog ORDER BY id DESC";
  $result = mysqli_query($connect, $sql);

  if (!$result) {
    die(mysqli_error($connect));
  }

  while ($data = mysqli_fetch_assoc($result)) {
    $products[] = $data;
  }
  return $products;
}

function getProduct ($connect, $id) {

  $sql = sprintf("SELECT * FROM catalog WHERE id=%d", (int)$id);
  $result = mysqli_query($connect, $sql);

  if(!$result) {
    die(mysqli_error($connect));
  }

  $item = mysqli_fetch_assoc($result);

  return $item;
}