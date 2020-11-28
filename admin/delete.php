<?php
include_once ('../src/public/modules/config.php');

if($_GET['id']) {
  $id = $_GET['id'];
  delete($connect, $id, 'catalog');
  header("Location: index.php");
}