<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
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
                            <!--a data-toggle="modal" data-target="#producto<?= $row->id; ?>" class="btn btn-primary btn-sm" style="font-family: <?= $nav->fuente; ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color:<?= $nav->btn_bordercolor; ?>">Detalles</a-->
                            <a href="<?= base_url(); ?>index.php/productos/product/<?= $row->id; ?>" class="btn btn-primary btn-sm" style="font-family: <?= $nav->fuente; ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color:<?= $nav->btn_bordercolor; ?>">Ver en tienda</a>
                          </div>
                        </div>
                      </center>
                    </div>
                    <div class="modal fade" id="producto<?= $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="z-index: 99999999;">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><?= $row->nombre; ?></h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <center><img src="<?= base_url().$row->img;?>" width="300" height="300"></center>
                            <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Descripcion:</b> <?= " ".$row->descripcion; ?></p>
                            <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Marca:</b> <?= " ".$row->marca; ?></p>
                            <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Año:</b> <?= " ".$row->year; ?></p>
                            <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Color:</b> <?= " ".$row->color; ?></p>
                            <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Precio:</b> <?= " ".$row->precio; ?></p>
                            <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Parte:</b> <?= " ".$row->parte; ?></p>
                            <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>ubicación:</b> <?= " ".$row->ubicacion; ?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
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
