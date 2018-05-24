<?php
if($this->session->userdata('register')){
  ?>
  <section>
    <div class="container center">
      <h5><?= $this->session->userdata('register') ?></h5>
    </div>
  </section>
  <?php
}
?>
<section class="categories-bg">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12 center">
        <h1 class="white-text title-large">Entérate de todo</h1>
        <br>
        <h3 class="white-text title-medium">Con Soplón entérate de las últimas noticias que te interesan, directo a tu celular.</h3>
        <br>
        <br>
        <a href="#categories" class="btn btn-flat orange white-text">
          Revisar categorias</a>
      </div>
      <div class="col s12 m3 l3">
    </div>
  </div>
</section>
<section class="categories2-bg" id="categories">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12 center">
        <h1 class="black-text title-large">Categorias destacadas</h1>
        <br>
      </div>
      <div class="col s12 m12 l12">
        <div class="row">
          <div class="col s12 m6 l3">
            <div class="card orange lighten-1">
              <div class="card-content white-text center">
                <span class="card-title center">Mangas</span>
                <p>Las últimas noticias de los mejores mangas actualizado.</p>
              </div>
              <div class="card-action center">
                <a href="<?= base_url() ?>c/mangas" class="white-text">Revisar</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="card blue lighten-1">
              <div class="card-content white-text center">
                <span class="card-title center">Deportes</span>
                <p>Encuentra resultados, fechas de los últimos deportes que te interesan</p>
              </div>
              <div class="card-action center">
                <a href="<?= base_url() ?>c/deportes" class="white-text">Revisar</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="card teal lighten-1">
              <div class="card-content white-text center">
                <span class="card-title center">Noticias</span>
                <p>Entérate de lo último en todo tipo de noticias a directo a tu celular.</p>
              </div>
              <div class="card-action center">
                <a href="<?= base_url() ?>c/noticias" class="white-text">Revisar</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="card red lighten-1">
              <div class="card-content white-text center">
                <span class="card-title center">Musica</span>
                <p>Conciertos, recitales, lanzamientos de tus artistas favoritos.</p>
              </div>
              <div class="card-action center">
                <a href="<?= base_url() ?>c/musica" class="white-text">Revisar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
