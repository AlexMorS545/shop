<?php
include_once ('config.php');
session_start();

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

    if(($login==isset($user['login'])) && ($email==isset($user['email'])) && (md5($pass)==isset($user['password']))) {
      $_SESSION['login'] = $login;
      $_SESSION['email'] = $email;
      $_SESSION['pass'] = $pass;

      header("Location: ../index.php");

      if(isset($_SESSION['login']) == 'admin' && isset($_SESSION['pass']) == 'admin') {
        header("Location: ../../../admin/index.php");

      }

    } else {
      exit("Вы не правильно ввели данные!");
    }
  }
}

if (isset($_POST['exit'])) {
  unset($_SESSION['login']);
  unset($_SESSION['email']);
  unset($_SESSION['pass']);
  session_destroy();
  header("Location: ../index.php");
}