<?php

include_once('server.php');

if(isset($_POST['add'])){
  $name = trim(strip_tags($_POST['name']));
  $text = trim(strip_tags($_POST['text']));
  $strSql = "INSERT INTO comment (name, text) VALUES ('%s', '%s')";
  $query = sprintf($strSql, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $text));
  $res = mysqli_query($connect, $query);
}

function allReviews($connect) {

  $sql = "SELECT * FROM comment ORDER BY data_creat DESC";
  $result = mysqli_query($connect, $sql);

  if(!$result) {
    die(mysqli_query($connect));
  }
  while ($data = mysqli_fetch_assoc($result)) {
    $reviews[] = $data;
  }
  return $reviews;
}