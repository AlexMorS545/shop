<?php
include_once ('../src/public/modules/config.php');
session_start();

if (isset($_POST['adminExit'])) {
  unset($_SESSION['login']);
  unset($_SESSION['email']);
  unset($_SESSION['pass']);
  session_destroy();
  header("Location: ../src/public/index.php");
}