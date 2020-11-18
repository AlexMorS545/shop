<?php
include_once('server.php');
if(isset($_POST['add'])){
  $name = trim(strip_tags($_POST['name']));
  $text = trim(strip_tags($_POST['text']));
  $strSql = "INSERT INTO feedback(name, text) VALUES ('%s', '%s')";
  $query = sprintf($strSql, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $text));
  $res = mysqli_query($connect, $query);
  header("Location: review.php");
}

function allReviews($connect) {

  $sql = "SELECT * FROM feedback ORDER BY data_creat DESC";
  $result = mysqli_query($connect, $sql);

  if(!$result) {
    die(mysqli_query($connect));
  }
  while ($data = mysqli_fetch_assoc($result)) {
    $reviews[] = $data;
  }
  return $reviews;
}