<?php
session_start();
include_once ('server.php');

function getAllItems ($connect, $table) {

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

function getOneItem ($connect, $id, $table) {

  $sql = sprintf("SELECT * FROM `{$table}` WHERE id=%d", (int)$id);
  $result = mysqli_query($connect, $sql);

  if(!$result) {
    die(mysqli_error($connect));
  }

  $item = mysqli_fetch_assoc($result);

  return $item;
}

function editProduct ($connect, $id, $name, $shortDesc, $fullDesc, $image, $price) {
  $id = (int)$id;

  $sql = "UPDATE catalog SET name='%s', short_desc='%s', full_desc='%s', price='%d', image='%s' WHERE id='%d'";

  $query = sprintf($sql, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $shortDesc), mysqli_real_escape_string($connect, $fullDesc), mysqli_real_escape_string($connect, $price),mysqli_real_escape_string($connect, $image), $id);

  $res = mysqli_query($connect, $query);
  if(!$res) {
    die(mysqli_error($connect));
  }

  return mysqli_affected_rows($connect);
}

function newProduct ($connect, $name, $shortDesc, $fullDesc, $price, $image) {

  $sql = "INSERT INTO catalog (name, short_desc, full_desc, price, image) VALUES ('%s', '%s', '%s', '%d', '%s')";

  $query = sprintf($sql, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $shortDesc), mysqli_real_escape_string($connect, $fullDesc), mysqli_real_escape_string($connect, $price), mysqli_real_escape_string($connect, $image));

  $res = mysqli_query($connect, $query);

  if(!$res) {
    die(mysqli_error($connect));
  }

  return $res;
}

function delete($connect, $id, $table) {
  $id = (int)$id;

  if($id == 0) {
    return false;
  }

  $sql = sprintf("DELETE FROM `{$table}` WHERE id=%d", $id);
  $res = mysqli_query($connect, $sql);

  if(!$res) {
    die(mysqli_query($connect));
  }
  return mysqli_affected_rows($connect);
}

function newUser($connect, $login, $email, $pass, $role) {
  $sql = "INSERT INTO users (login, email, password, role) VALUES ('%s', '%s', '%s', '%d')";

  $query = sprintf($sql, mysqli_real_escape_string($connect, $login),mysqli_real_escape_string($connect, $email),mysqli_real_escape_string($connect, $pass),mysqli_real_escape_string($connect, $role));

  $res = mysqli_query($connect, $query);
  if(!$res) {
    die(mysqli_error($connect));
  }
  return true;
}