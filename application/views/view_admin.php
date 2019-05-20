<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section id="banner">
    <div class="content">
      <div class="container">

        <div class="col-md-10 col-12 ml-auto mr-auto">
          <h3><b>Editar informacion</b></h3>
          <hr>
          <form action="<?= base_url() ?>index.php/admin/modNav" method="post" enctype="multipart/form-data">
            <p style="color:black; font-size:18px"><b>Navbar</b></p>
            <div class="row">
              <div class="col-md-5 pr-md-1" style="">
                <div class="form-group">
                  <b>Logo:</b><br><img src="<?php echo base_url().$nav->logo;?>" width="10%" id="algo">
                  <input type="file" name="tcarga" id="upload" value="<?php echo $nav->logo; ?>">
                  <input type="hidden" name="id" value="<?php echo $nav->id; ?>">

                  <script>
                  document.getElementById("upload").onchange = function() {
                    var reader = new FileReader(); //instanciamos el objeto de la api FileReader

                    reader.onload = function(e) {
                      document.getElementById("algo").src = e.target.result;
                    };

                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                  };

                  </script>
                </div>
              </div>
              <div class="col-md-3 px-md-1" style="">
                <div class="form-group">
                  <label><b>Abreviacion:</b></label><br>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $nav->nombre; ?>">
                </div>
              </div>
              <div class="col-md-4 pl-md-1" style="">
                <div class="form-group">
                  <label><b>Nombre de página:</b></label><br>
                  <input type="text" name="nombre_web" class="form-control" value="<?php echo $nav->nombre_web; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-md-1" style="">
                <div class="form-group">
                  <label><b>Opcion 1:</b></label><br>
                  <input type="text" name="op1" class="form-control" value="<?php echo $nav->op1; ?>">
                </div>
              </div>
              <div class="col-md-4 px-md-1" style="">
                <div class="form-group">
                  <label><b>Opcion 2:</b></label><br>
                  <input type="text" name="op2" class="form-control" value="<?php echo $nav->op2; ?>">
                </div>
              </div>
              <div class="col-md-4 pl-md-1" style="">
                <div class="form-group">
                  <label><b>Opcion 4:</b></label><br>
                  <input type="text" name="op4" class="form-control" value="<?php echo $nav->op4; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 pr-md-1" style="">
                <div class="form-group">
                  <label><b>Opcion 3:</b></label><br>
                  <input type="text" name="op3" class="form-control" value="<?php echo $nav->op3; ?>">
                </div>
              </div>
              <div class="col-md-3 px-md-1" style="">
                <div class="form-group">
                  <label><b>Opcion 31:</b></label><br>
                  <input type="text" name="op31" class="form-control" value="<?php echo $nav->op31; ?>">
                </div>
              </div>
              <div class="col-md-3 px-md-1" style="">
                <div class="form-group">
                  <label><b>Opcion 32:</b></label><br>
                  <input type="text" name="op32" class="form-control" value="<?php echo $nav->op32; ?>">
                </div>
              </div>
              <div class="col-md-3 pl-md-1" style="">
                <div class="form-group">
                  <label><b>Opcion 33:</b></label><br>
                  <input type="text" name="op33" class="form-control" value="<?php echo $nav->op33; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 pr-md-1" style="">
                <div class="form-group">
                  <label><b>Fondo:</b></label><br>
                  <input type="text" name="bg_color" class="form-control" value="<?php echo $nav->bg_color; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
                </div>
              </div>
              <div class="col-md-3 px-md-1" style="">
                <div class="form-group">
                  <label><b>Fuente:</b></label><br>
                  <input type="text" name="fuente" class="form-control" value="<?php echo $nav->fuente; ?>">
                </div>
              </div>
              <div class="col-md-3 px-md-1" style="">
                <div class="form-group">
                  <label><b>Tamaño:</b></label><br>
                  <input type="number" name="size" class="form-control" value="<?php echo $nav->size; ?>">
                </div>
              </div>
              <div class="col-md-3 pl-md-1" style="">
                <div class="form-group">
                  <label><b>Buscar:</b></label><br>
                  <input type="text" name="search" class="form-control" value="<?php echo $nav->search; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-md-1" style="">
                <div class="form-group">
                  <label><b>Color botón:</b></label><br>
                  <input type="text" name="btn_bgcolor" class="form-control" value="<?php echo $nav->btn_bgcolor; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
                </div>
              </div>
              <div class="col-md-4 px-md-1" style="">
                <div class="form-group">
                  <label><b>Letra botón:</b></label><br>
                  <input type="text" name="btn_bordercolor" class="form-control" value="<?php echo $nav->btn_bordercolor; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
                </div>
              </div>
              <div class="col-md-4 pl-md-1" style="">
                <br>
                <center><input type="submit" value="Actualizar" style="width:150px;border-color:<?php echo $nav->btn_bordercolor; ?>;color:<?php echo $nav->btn_bordercolor; ?> ;background-color:<?php echo $nav->btn_bgcolor; ?>" class="form-control"></center>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section id="productos">
    <div class="content">
      <div class="container">
        <div class="col-md-10 col-12 ml-auto mr-auto">
          <h3><b>Productos</b></h3>
          <hr>
          <center>
          <a href="<?= base_url()."index.php/productos/agregar";?>" style="text-align: center;width:150px;border-color:<?php echo $nav->btn_bordercolor; ?>;color:<?php echo $nav->btn_bordercolor; ?> ;background-color:<?php echo $nav->btn_bgcolor; ?>" class="form-control">
            Agregar
          </a>
        </center>
        <br>
          <table class="table">
            <?php
            foreach ($productos as $row)
            {
              ?>
              <tr>
                <td class="text-center"><?php  echo $row->nombre; ?> </td>
                <td class="text-center">
                  <center>
                  <button type="button" style="width:150px;border-color:<?php echo $nav->btn_bordercolor; ?>;color:<?php echo $nav->btn_bordercolor; ?> ;background-color:<?php echo $nav->btn_bgcolor; ?>" class="form-control" data-toggle="modal" data-target="#producto<?= $row->id; ?>">
                    Ver
                  </button>
                </center>
                 </td>
                <td class="text-center"><center><a href="<?= base_url()."index.php/productos/Editar/".$row->id;?>" style="text-align: center;width:150px;border-color: blue;background-color: white;color: blue" class="form-control" >Modificar</a></td></center>
                <td class="text-center"><center><button type="submit" style="background-color: white;border-color:red ;text-align: center;width:150px;color: red" class="form-control" data-toggle="modal" data-target="#eliminar<?= $row->id; ?>">Eliminar</button></center></td>

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

                <!-- Modal -->
                <div class="modal fade" id="eliminar<?= $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Deseas eliminar el producto?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <a href="<?= base_url()."index.php/productos/Eliminar/".$row->id;?>"  style="text-align: center;width:50%;background-color: #c82333;color: black" class="form-control">Eliminar</a>
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-footer">
                        <button type="button" style="text-align: center;width:50%;background-color: #C3C3C3;color: black" class="form-control" data-dismiss="modal">Close</button>
                        <a href="<?= base_url()."index.php/productos/Eliminar/".$row->id;?>"  style="text-align: center;width:50%;background-color: #c82333;color: black" class="form-control">Eliminar</a>
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
  </section>
  <hr>
  <section class="hero" id="clientes">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd">
            holas clientes
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section class="hero" id="pagos">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd">
            holas ganancias
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<!-- Mirrored from design-graphma.com/demo/sedmy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 04:47:26 GMT -->
</html>
