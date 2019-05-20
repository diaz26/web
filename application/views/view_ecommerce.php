<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section>
    <div class="content">
      <div class="container" style="padding-top: 50px">
        <div class="row">
          <div class="col-md-9 col-12 col-sm-12 mr-auto ml-auto">
            <div class="row">
              <?php
              foreach ($productos as $key) {
                ?>
                <div class="col-md-3 mr-auto ml-auto">
                  <form action="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito" method="get">
                    <center>
                      <div class="card text-white bg-secondary mb-3" style="width:100%;">
                        <img src="<?= base_url().$key->img;?>" style="width:200px; height:150px" >
                        <div class="card-body" style="background-color:<?= $nav->bg_color; ?>;">
                          <center><h5 class="card-title" style=" color:<?= $nav->btn_bordercolor; ?>; font-family: <?= $nav->fuente; ?>;"><?php echo $key->nombre; ?></h5></center>
                          <p class="card-text" style=" color:<?= $nav->btn_bordercolor; ?>; font-family: <?= $nav->fuente; ?>;text-align:center"><?php echo $key->precio; ?> $USD</p>
                          <hr>
                          <input type="hidden" name="id" value="<?php echo $key->referencia; ?>">
                          <input type="hidden" name="valor_prod" value="<?php echo $key->precio; ?>">
                          <input type="hidden" name="nombre_prod" value="<?php echo $key->nombre; ?>">
                          <input type="hidden" name="ban" value="agrega" id="ban">
                          <a href="#" class="card-link" data-toggle="modal" data-target="#producto<?= $key->id; ?>" style="font-family: <?= $nav->fuente; ?>; color: <?= $nav->btn_bordercolor; ?>">Detalles</a>
                          <button href="#" id="cagregarcar" type="submit" name="cagregarcar" style="font-family: <?= $nav->fuente; ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color:<?= $nav->btn_bordercolor; ?>">Al carrito</button>
                        </div>
                      </div>
                    </center>
                  </div>
                  <div class="modal fade" id="producto<?= $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="z-index: 99999999;">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><?= $key->nombre; ?></h5>

                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <center><img src="<?= base_url().$key->img;?>" width="300" height="300"></center>
                          <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Descripcion:</b> <?= " ".$key->descripcion; ?></p>
                          <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Marca:</b> <?= " ".$key->marca; ?></p>
                          <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Año:</b> <?= " ".$key->year; ?></p>
                          <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Color:</b> <?= " ".$key->color; ?></p>
                          <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Precio:</b> <?= " ".$key->precio; ?></p>
                          <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>Parte:</b> <?= " ".$key->parte; ?></p>
                          <p style="font-size: 13px; margin-bottom: 0px; margin-top: 0px"><b>ubicación:</b> <?= " ".$key->ubicacion; ?></p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <?php
              }
              ?>
            </div>

          </div>
          <div class="col-md-3">
            <div class="block-col">
              <div class="header" style="font-family: <?= $nav->fuente; ?>;color: <?= $nav->btn_bordercolor; ?>;background-color:<?= $nav->bg_color; ?>; ">Categorias</div>
              <div class="content" >
                <ul>
                  <?php
                  if (!empty($categ)) {
                    // code...

                    foreach ($categ as $files) {
                      ?>
                      <li><a href="<?= base_url() ?>index.php/post/categoria/<?php echo $files->categoria; ?>"style="color:black"><?php echo $files->categoria; ?> <span style="color:#2E2E2E">(<?php echo $files->num; ?>)</span></a></li>
                      <?php
                    }
                  }
                  ?>
                </ul>
              </div>
            </div>
            <div class="block-col">
              <div class="header" style="font-family: <?= $nav->fuente; ?>;color: <?= $nav->btn_bordercolor; ?>;background-color:<?= $nav->bg_color; ?>; ">Buscar</div>
              <div class="content">
                <form class="" action="<?= base_url() ?>index.php/post/buscar" method="post">
                  <input type="text" name="search" class="form-control" placeholder="Buscar" style="font-family: <?= $nav->fuente; ?>; border-color: <?= $nav->btn_bordercolor; ?>;color: <?= $nav->btn_bordercolor; ?>">
                  <center><input type="submit" class="form-control" style="font-family: <?= $nav->fuente; ?>;background-color:<?= $nav->btn_bgcolor; ?>; border-color: <?= $nav->btn_bordercolor; ?>;color: <?= $nav->btn_bordercolor; ?>; width: 100px" value="Buscar"></center>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<!-- Mirrored from design-graphma.com/demo/sedmy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 04:47:26 GMT -->
</html>
