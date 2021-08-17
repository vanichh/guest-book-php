<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Guest Book</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Главная</a>
        <?php if ($_SESSION['authorization'] == FALSE) : ?>
          <a class="nav-link" href="../authorization">Войти</a>
          <a class="nav-link" href="../register">Зарегестрироваться</a>
        <?php endif ?>
        <?php
        if ($_SESSION['authorization'] == TRUE) : ?>
          <a class="nav-link" href="https://<?= $_SERVER['SERVER_NAME'] ?>/logout">Выйти</a>
        <?php endif ?>
      </div>
    </div>
    <?php if ($_SESSION['authorization'] == TRUE) : ?>
      <span class="navbar-text"><?= $_SESSION['login'] ?></span>
    <?php endif ?>
    <form class="d-flex ms-2">
      <input class="form-control me-2" type="search" placeholder="Поиск пользователей" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Поиск</button>
    </form>
  </div>
</nav>