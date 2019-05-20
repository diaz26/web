<body >
  <div class="content" >
    <div class="row">
      <div class="col-lg-12" >
        <div class="card text-center">
          <div class="card-header" style="padding-bottom: 2px; background-color:black ">
            <h3 class="card-title" style="font-family: hughs; text-align:center; color: #0492E8">Algunos de nuestros productos</h3>
          </div>
          <style media="screen">
          .fondo-blur{
            position: relative;
            overflow: hidden;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            width: 100%;
            background-color: #66999;
          }

          .fondo-blur::before{
            content: '';
            display: block;
            background: inherit;
            position: absolute;

            width: 100%; height: 100%;
            left: 0; top: 0;
            filter: blur(3px);
          }
          </style>
          <div class="card-body fondo-blur " style="background-image: url(<?= base_url(); ?>images/5.jpg);">
            <div id="carouselExampleFade1"  class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner" >
                <div class="carousel-item active">
                  <div class="row">
                    <?php
                    foreach ($productos as $row ){
                     ?>
                    <div class="col-lg-3 ml-auto mr-auto">
                      <center>
                        <div class="card text-white bg-secondary mb-3" style="width:100%;">
                          <img src="<?= base_url().$row->img;?>" style="width:300px; height:240px">
                          <div class="card-body" style="background-color: #AEC0B8">
                            <h5 class="card-title"><?= $row->nombre; ?></h5>
                            <p class="card-text"><?= " ".$row->descripcion; ?></p>
                            <a href="#" class="btn btn-primary btn-sm" style="font-family: <?= $nav->fuente; ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color:<?= $nav->btn_bordercolor; ?>">Detalles</a>
                            <a href="#" class="btn btn-primary btn-sm" style="font-family: <?= $nav->fuente; ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color:<?= $nav->btn_bordercolor; ?>">Ver en tienda</a>
                          </div>
                        </div>
                      </center>
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-muted">
            <a href="<?= base_url(); ?>index.php/productos" class="btn btn-primary" style="font-family: <?= $nav->fuente; ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color:<?= $nav->btn_bordercolor; ?>">Ver todos</a>
          </div>
        </div>
      </div>
    </div><!--row-->
  </div><!--content-->
</body>
