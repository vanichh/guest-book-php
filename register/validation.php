<?php
function validatetion($login, $email, $password, $confirm, $count)
{
  global $errorsRegister;
  if (strlen($login) < 4 AND strlen($login) !== 0) {
    $errorsRegister[] = 'Длина логина меньше 4 символов!';
  }
  if (strlen($login) == 0) {
    $errorsRegister[] = 'Заполните поле логин';
  }
  if (strlen($login) > 15) {
    $errorsRegister[] = 'Длина логина больше 15 символов!';
  }
  if (!preg_match('/^[A-Za-z0-9]+$/i', $login)) {
    $errorsRegister[] = 'Логин не должен содержать русские буквы, только латиница';
  }

  if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    $errorsRegister[] = 'Почта указана неверно';
  }
  if (strlen($email) == 0) {
    $errorsRegister[] = 'Заполните поле email';
  }

  if (strlen($password) < 7) {
    $errorsRegister[] = 'Длина пароля меньше 7 символов!';
  }
  if (strlen($password) > 20) {
    $errorsRegister[] = 'Длина пароля больше 20 символов!';
  }

  if ($password != $confirm) {
    $errorsRegister[] = 'Подтверждение пароля не совподает';
  }
  if ($count > 0) {
    $errorsRegister[] = 'Логин уже занят';
  }
}
