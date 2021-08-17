<?php
session_start();
require_once "../SQL.php";

if (!empty($_POST['password']) and !empty($_POST['login'])) {
  $login = $_POST['login'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $query = "SELECT * FROM users WHERE login='$login'";
  $result = mysqli_query($link, $query);

  $user = mysqli_fetch_assoc($result);
  $verifyPassword = password_verify($_POST['password'], $user['password']);
  if (!empty($user) and $verifyPassword) {
    $_SESSION['authorization'] = TRUE;
    $_SESSION['login'] = $user['login'];
    $_SESSION['authoAlert'] = TRUE;
    header("Location: /");
  } else {
    $_SESSION['authorization'] = false;
  }
} else {
  require_once('form-authorization.php');
}
