
<section>
  <div class="container">
    <div class="row">
      <div class="col s12 m7 l7">
        <br>
        <h5>Páginas destacadas.</h5>
        <br>
        <?php
        if($links){
          foreach ($links as $link) {
          ?>
          <div class="card-panel white lighten-2">
            <b><?= ucfirst($link['titulo_pagina']) ?></b><br>
            <?= ucfirst($link['glosa_pagina']) ?>
            <a href="<?= $link['url_ultimo'] ?>" target="_blank" class="text-justify">
              &nbsp; <i>ver última entrada</i>
            </a>
          </div>
          <?php
          }
        }else{
          echo '<h3>No se encontraron resultados.</h3>';
        }
        ?>
      </div>
      <div class="col s12 m1 l1"></div>
      <div class="col s12 m4 l4">
        <br>
        <h5>Notificaciones</h5>
        <br>
        <div class="card-panel white lighten-2">
          Notificarme mediante:<br>
          <form class="" action="index.html" method="post">
            <br>
              <input type="checkbox"  style="position: relative !important;left: 0px;opacity: 10 !important; "/>
              <span>Email</span><br>
              <input type="checkbox"  style="position: relative !important;left: 0px;opacity: 10 !important; "/>
              <span>SMS</span><br>
              <input type="checkbox"  style="position: relative !important;left: 0px;opacity: 10 !important; "/>
              <span>Push</span><br>
          </form>
          <br>
          <a href="#" class="btn blue waves-block">Listo, notificame</a>
        </div>
      </div>
    </div>
  </div>
</section>
