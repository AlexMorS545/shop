<?php
include_once ('server.php');

if(isset($_POST['add'])){

  $name = $_POST['name'];
  $text = $_POST['text'];

  if($name != '' && $text != '') {
    mysqli_query($connect, "INSERT INTO feedback(name, text) VALUES ('$name', '$text')");
    mysqli_close($connect);
  }
}