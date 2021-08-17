<?php
$confirm = $_POST['confirm'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://<?= $_SERVER['SERVER_NAME'] ?>/css/bootstrap/css/bootstrap.min.css">
</head>

<body class="container w-25 mt-3">
  <? if (count($errorsRegister) !== 0) : ?>
    <? foreach ($errorsRegister as $item) : ?>
      <div class="alert alert-danger alert-dismissible mt-3" role="alert" id="liveAlert"><?= $item ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <? endforeach; ?>
  <? endif ?>
  <form action="" method="POST" class="mt-3">
    <div class="mb-3">
      <input type="text" value="<?= $login ?>" class="form-control" placeholder="Логин" name="login" required>
    </div>
    <div class="mb-3"><input type="email" value="<?= $email ?>" placeholder="Email" class="form-control" name="email" required></div>
    <div class="mb-3"><input type="date" value="<?= $birthday ?>" placeholder="День рождения" class="form-control" name="birthday" required></div>
    <div class="mb-3"><input name="password" placeholder="Пароль" class="form-control" type="password" required></div>
    <div class="mb-3"><input name="confirm" placeholder="Пароль еще раз" class="form-control" type="password" required></div>
    <input type="submit" class="form-control" value="Отправить">
  </form>
  <script src=" https://<?= $_SERVER['SERVER_NAME'] ?>/css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>