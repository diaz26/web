<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100" style="background-color: <?= $page->body_bg; ?>">
  <section id="home" class="hero">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd">
            <div class="col-md-9 col-12 col-sm-6 mr-auto ml-auto">
              <div class="row">
                <?php
                $suma=0;
                foreach ($productos as $key) {
                  ?>
                  <form class="" action="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito" method="get">
                  <div class="col-md-4">
                    <div class="card" style="width: 16rem;">
                      <div class="card-body">
                        <center><h5 class="card-title"><?php echo $key->Nombre; ?></h5></center>
                        <p class="card-text" style="text-align:center"><?php echo $key->Descripcion; ?></p>
                        <p class="card-text" style="text-align:center"><?php echo $key->Marca; ?></p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="text-align:center"><a href="#" class="card-link" data-toggle="modal" data-target="#producto<?= $key->id; ?>">Ver producto</a></li>
                        <li class="list-group-item" style="text-align:center"><?php echo $key->Precio; ?> $USD </li>
                        <li class="list-group-item" style="text-align:center">
                          <input type="hidden" name="id" value="<?php echo $key->cod_producto; ?>">
                          <input type="hidden" name="valor_prod" value="<?php echo $key->Precio; ?>">
                          <input type="hidden" name="nombre_prod" value="<?php echo $key->Nombre; ?>">
                          <input type="hidden" name="ban" value="agrega" id="ban">
                          <input type="hidden" name="page" value="<?php echo $page->nombre; ?>">
                          <center><button class="form-control" style="width:150px;background-color:<?php echo $page->nav_bg; ?>;color:<?php echo $page->nav_color; ?>" type="text" id="cagregarcar" type="submit"
                          name="cagregarcar">Añadir al carrito </button></center>
                        </li>
                      </ul>
                      <div class="modal fade" id="producto<?= $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="z-index: 99999999;">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle"><?= $key->Nombre; ?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="<?= base_url().$key->Imagen;?>">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                  <?php
                }
                ?>
              </div>

            </div>
            <div class="col-lg-3 col-md-3">
              <div class="block-col">
                <div class="header" style="background-color:<?= $page->nav_bg; ?>; ">Categorias</div>
                <div class="content" >
                  <ul>
                    <?php
                    foreach ($categ as $files) {
                      ?>
                      <li><a href="<?= base_url() ?>index.php/post/categoria/<?php echo $files->categoria; ?>"style="color:black"><?php echo $files->categoria; ?> <span style="color:#2E2E2E">(<?php echo $files->num; ?>)</span></a></li>
                      <?php
                    }
                    ?>
                  </ul>
                </div>
              </div>
              <div class="block-col">
                <div class="header" style="background-color:<?= $page->nav_bg; ?>; ">Buscar</div>
                <div class="content">
                  <form class="" action="<?= base_url() ?>index.php/post/buscar" method="post">
                    <input type="text" name="search" class="form-control" placeholder="Buscar">
                    <center><input type="submit" class="form-control" style="background-color:<?= $page->nav_bg; ?>;color: <?= $page->nav_color; ?>; width: 100px" value="Buscar"></center>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
