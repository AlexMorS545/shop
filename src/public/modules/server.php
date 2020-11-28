<?php
session_start();

const SERVER = "localhost";
const LOGIN = "root";
const PASSWORD = "";
const DB = "shoponphp";

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or die("Ошибка соединения!");
