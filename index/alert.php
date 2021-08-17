<?php
if ($_SESSION['authoAlert'] == TRUE) : ?>
  <div class="alert alert-info alert-dismissible mt-3" role="alert" id="liveAlert">
    <?= "$_SESSION[login] вы успешно вошли в систему" ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <? $_SESSION['authoAlert'] = FALSE; ?>
<?php endif ?>
<?php
if ($_SESSION['logaut']) : ?>
  <div class="alert alert-info alert-dismissible mt-3" role="alert" id="liveAlert">
    <?= "Вы вышли из системы" ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <? $_SESSION['logaut'] = NULL; ?>
<?php endif ?>