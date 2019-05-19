<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

  <section id="home" class="hero">

    <div class="slide-home">

      <div class="slide-item">

        <div class="container">

          <div class="row hero-padd" style="padding-top: 100px;">

            <div class="col-md-10 col-12 ml-auto mr-auto">

              <div class="hero-text">

                <center><h3>Mis productos</h3></center>
                <a href="<?= base_url()."index.php/productos/agregar";?>" style="text-align: center;width:15%;background-color: <?= $head->nav_bg; ?>" class="form-control">Agregar</a>
                <br>
                <table class="table">
                  <?php
                  foreach ($productos as $row)
                  {
                    ?>
                    <tr>

                      <td class="text-center"><?php  echo $row->Nombre; ?> </td>
                      <td class="text-center"> <button type="button" style="text-align: center;width:100%;background-color: <?= $head->nav_bg; ?>;color: black" class="form-control" data-toggle="modal" data-target="#producto<?= $row->id; ?>">Ver</button> </td>
                      <td class="text-center"><?php  echo $row->Precio;?> $USD</td>
                      <td class="text-center"><a href="<?= base_url()."index.php/productos/Editar/".$row->id;?>" style="text-align: center;width:100%;background-color: #0069d9;color: black " class="form-control" >modificar</a></td>
                      <td class="text-center"><a href="<?= base_url()."index.php/productos/Eliminar/".$row->id;?>"  style="text-align: center;width:100%;background-color: #c82333;color: black " class="form-control" >eliminar</a></td>

                      <div class="modal fade" id="producto<?= $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="z-index: 99999999;">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle"><?= $row->Nombre; ?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="<?= base_url().$row->Imagen;?>">
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
                  </tr>
                </table>
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
