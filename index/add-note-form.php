    <?php if ($resultPOST) : ?>
      <div class="alert alert-info mt-3">
        Запись успешно добавленна!
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
      <div class="mb-3 d-flex justify-content-end"><input type="submit" class="btn btn-primary" value="Опубликовать"></div>
    </form>