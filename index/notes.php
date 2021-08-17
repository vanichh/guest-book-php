<?php while ($rez = mysqli_fetch_assoc($result)) : ?>
  <div class="card border-light text-dark bg-light mb-3">
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