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