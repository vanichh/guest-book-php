<?php
require_once 'function.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Гостевая книга</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="container w-25">
    <h1 class="text-center ">Гостевая книга</h1>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item <?php disabledStart($_GET['pages']) ?>">
          <a class="page-link" href="/?pages=<?php pageChanges('-') ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?php for ($i = 1; $i <= $NumberPages; $i++) : ?>
          <?php
          $class = "page-item";
          if ($_GET['pages'] == $i) $class .= " active";
          ?>
          <li class="<?= $class ?>"><a class="page-link" href="/?pages=<?= $i ?>"><?= $i ?></a></li>
        <?php endfor ?>
        <li class="page-item <?php disabledEnd($_GET['pages']) ?>">
          <a class="page-link" href="/?pages=<?php pageChanges('+') ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    <?php while ($rez = mysqli_fetch_assoc($result)) : ?>
      <div class="card border-light text-dark bg-light mt-3">
        <div class="card-header">
          <?php
          $date = explode('-', $rez['date']);
          $date = "$date[2].$date[1].$date[0]"
          ?>
          <span><?= $date . ' ' . $rez['time'] ?></span>
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $rez['name'] ?></h5>
          <p class="card-text">
            <?= $rez['text'] ?>
          </p>
        </div>
      </div>
    <?php endwhile ?>
    <?php if ($resultPOST) : ?>
      <div class="alert alert-info mt-3">
        Запись успешно сохранена!
      </div>
    <?php endif ?>
    <?php if ($resultPOST === FALSE) : ?>
      <div class="alert alert-danger mt-3">
        Произошла ошибка записи!
      </div>
    <?php endif ?>
      <form action="index.php" class="mt-3" method="POST">
        <div class="mb-2"><input class="form-control" name="name" placeholder="Ваше имя"></div>
        <div class="mb-2"> <textarea class="form-control" name="text" placeholder="Ваш отзыв" rows="5"></textarea></div>
        <div class="mb-3 d-flex justify-content-end"><input type="submit" class="btn btn-primary" value="Сохранить"></div>
      </form>
  </div>
</body>

</html>