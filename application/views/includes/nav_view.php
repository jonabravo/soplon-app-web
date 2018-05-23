<?php
 /**
 * componente de navegador
 *
 */
 $active_dashboard = $active == 'dashboard' ? 'active' : 'false';
 $active_product   = $active == 'product' ? 'active' : 'false';
 $active_category  = $active =='category' ? 'active' : 'false';

 $blue = true;
 $color_nav = $blue ? '#5c8bcc' : '#783CBD';
?>
<header>
  <div class="fixed-announcement">
    <div class="announcement hide">
      <div class="container center">1.0 alpha has been released!</div>
    </div>
  </div>
  <nav class="top-nav flat" style="background-color: <?= $color_nav ?> !important;box-shadow:0 0 0 0 !important;">
    <div class="container">
      <div class="nav-wrapper">
        <a class="page-title" style="font-weight:300;">
          <?php echo $title_page; ?>
        </a>
        <ul id="nav-mobiles" class="right hide-on-med-and-down">
        <li class="white-text" style="font-weight:200; font-size:13px !important; text-align:right;">
          <?php
          echo $this->session->userdata('email');
          ?>
        </li>
      </ul>
      </div>
    </div>
  </nav>
      <div class="container grey lighten-5">
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
      </div>
      <ul id="nav-mobile" class="side-nav fixed grey lighten-5" style="transform: translateX(0%); background-color: #f0f2f5 !important;">
        <li class="" style="margin-top: -16px;
                        height: 65px;
                        background-color: <?= $color_nav ?> !important;">
            <p class="white-text" style="margin-left: 40px;
                padding-top: 10px;
                font-weight: 300;">
               <?= $this->config->item('name_app') ?></p>
        </li>

        <li class="bold <?= $active_dashboard ?>">
          <?php
          $params = array(
            'url_action' => 'dashboard',
            'text' => 'Dashboard',
            'icon' => 'activity.svg'
          );
          $this->load->view('components/item_navegation', array('params' => $params));
          ?>
        </li>
        <li class="bold <?= $active_product ?>">
          <?php
          $params = array(
            'url_action' => 'product',
            'text' => 'Productos',
            'icon' => 'product.svg'
          );
          $this->load->view('components/item_navegation', array('params' => $params));
          ?>
        </li>
        <li class="bold <?= $active_category ?>">
          <?php
          $params = array(
            'url_action' => 'category',
            'text' => 'Categorias',
            'icon' => 'category.svg'
          );
          $this->load->view('components/item_navegation', array('params' => $params));
          ?>
        </li>
        <li class="bold">
          <?php
          $params = array(
            'url_action' => 'sales',
            'text' => 'Transacciones',
            'icon' => 'sales.svg'
          );
          $this->load->view('components/item_navegation', array('params' => $params));
          ?>
        </li>

        <li class="no-padding hide">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">CSS</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="color.html">Color</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>

      </ul>
      <div class="patreon-ad"><a href="<?= base_url() ?>logout" class="waves-effect">Cerrar sesión</a></div>
    </header>
    <main>
