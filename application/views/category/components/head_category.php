<?php
switch ($category) {
  case 'mangas':
    $background = 'orange lighten-1';
    break;
  case 'deportes':
    $background = 'blue lighten-1';
    break;
  case 'noticias':
    $background = 'teal lighten-1';
    break;
  case 'musica':
    $background = 'red lighten-1';
    break;
  default:
    $background = 'orange lighten-1';
    break;
}

?>

<section class="<?= $background ?>">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h1 class="white-text">
          <small style="font-size: 16px; font-weight:300;">
            Categoría:<br>
          </small> <?= ucfirst($category) ?></h1>
      </div>
    </div>
  </div>
</section>
