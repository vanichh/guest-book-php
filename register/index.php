<?php
session_start();
require_once "../SQL.php";
$login = $_POST['login'];
$password = $_POST['password'];
if (!empty($login) and !empty($password)) {
  global $login, $password;
  $login = trim($login);
  $password = trim($password);
  $errorsRegister = [];
  $confirm = $_POST['confirm'];
  $email = $_POST['email'];
  $birthday = $_POST['birthday'];
  require_once "validation.php";
  $query =  "SELECT COUNT(`login`) as count FROM users WHERE `login`='$login'";
  $count = mysqli_fetch_assoc(mysqli_query($link, $query))['count'];
  validatetion($login, $email, $password, $confirm, $count);
  $password = password_hash($password, PASSWORD_BCRYPT);
  if (count($errorsRegister) === 0) {
    $query = "INSERT INTO users SET `login`='$login', `password`='$password', email='$email', birthday='$birthday', registration_date=CURDATE()";
    $rezul = mysqli_query($link, $query);
    $_SESSION['authorization'] = true;
    $_SESSION['login'] = $login;
    ob_start();
    header("Location: /");
    ob_end_flush();
  }
}
require_once('form-register.php');
