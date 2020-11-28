<?php
session_start();
include_once ('config.php');

if(isset($_POST['reg'])) {
  $login = trim(strip_tags($_POST['name']));

  if (strtolower($login) == 'admin') {
    exit("Админ использовать нелья!");
  }

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email = trim(strip_tags($_POST['email']));
  }

  $users = getAllItems($connect, 'users');

  foreach ($users as $user) {
    if ($login == $user['login'] || $email == $user['email']) {
      exit("Пользователь с такими данными уже существует!");
    }
  }

  $pass = trim(strip_tags($_POST['pass']));

  if ($login != 'admin') {
    $role = 0;
  }

  newUser($connect, $login, $email, md5($pass), $role);
  $_SESSION['login'] = $login;

  header("Location: ../index.php");
}

if (isset($_POST['enter'])) {
  $login = trim(strip_tags($_POST['name']));
  $email = trim(strip_tags($_POST['email']));
  $pass = trim(strip_tags($_POST['pass']));

  $users = getAllItems($connect, 'users');

  foreach ($users as $user) {

    if($login==$user['login'] && $email==$user['email'] && md5($pass)==$user['password']) {
      $_SESSION['login'] = $login;
      header("Location: ../index.php");
    } else {
      print_r($user);
      exit("Вы не правильно ввели данные!");
    }
  }
}

if (isset($_POST['exit'])) {
  unset($_SESSION['login']);
  session_destroy();
  header("Location: ../index.php");
}
