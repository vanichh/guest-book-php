<?php
require_once 'index/add-note.php';
session_start();
if (!(isset($_SESSION['authorization']))) {
  $_SESSION['authorization'] = FALSE;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Гостевая книга</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="container w-50">
    <header>
      <?php require_once('index/nav.php'); ?>
      <?php require_once('index/pagination.php') ?>
      <?php require_once('index/alert.php') ?>
    </header>
    <main>
      <?php require_once('index/notes.php') ?>
    </main>
    <?php if ($_SESSION['authorization']) require_once('index/add-note-form.php') ?>
  </div>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>