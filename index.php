<?php include 'config.php' ?>
<?php include 'components/inc/header.php' ?>

<div id="preloader">
  <div class="preloader-content">
    <div class="preloader-progress" id="preloader-progress"></div>
    <div class="preloader-percent" id="preloader-percent">0%</div>
  </div>
</div>


<div id="content">
  <div id="app">

    <?php include 'components/navbar/Navbar.php' ?>

    <div class="tab-content" id="myTabContent">

      <div class="tab-pane" :class="{ active: activeTab === 'rutas' }" id="rutas">
        <?php include 'components/views/RutasPage.php' ?>
      </div>

      <div class="tab-pane" :class="{ active: activeTab === 'detalle' }" id="detalle">
        <?php include 'components/views/DetallePage.php' ?>
      </div>

      <div class="tab-pane" :class="{ active: activeTab === 'estadisticas' }" id="estadisticas">
        <?php include 'components/views/EstadisticasPage.php' ?>
      </div>

      <div class="tab-pane" :class="{ active: activeTab === 'completar' }" id="completar">
        <?php include 'components/views/CompletarPage.php' ?>
      </div>

    </div>
    
  </div>
</div>

<?php include 'components/inc/footer.php' ?>