<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section id="home" class="hero">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd">
            <div class="col-md-10 col-12 ml-auto mr-auto">
              <h3><b>Editar producto</b></h3>
              <hr>
              <form action="<?=base_url(); ?>index.php/productos/modificar/" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                      <label><b>Nombre</b></label><br>
                      <input type="text" class="form-control" name="Nombre" value="<?php  echo $producto->nombre; ?>">
                      <input type="hidden" name="id" value="<?php  echo $producto->id; ?>">
                    </div>
                  </div>
                  <div class="col-md-4 px-md-1">
                    <div class="form-group">
                      <label><b>Marca</b></label><br>
                      <input type="text" class="form-control" name="Marca" value="<?php  echo $producto->marca; ?>">
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label><b>Precio</b></label><br>
                      <input type="number" class="form-control" name="Precio" value="<?php  echo $producto->precio; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <b>Imagen:</b><br><img src="<?php echo base_url().$producto->img;?>" width="100%" id="imaproducto">
                      <input type="file" name="tcarga" id="upload" value="<?php echo $producto->img; ?>">
                      <script>
                      document.getElementById("upload").onchange = function() {
                        var reader = new FileReader(); //instanciamos el objeto de la api FileReader

                        reader.onload = function(e) {
                          document.getElementById("imaproducto").src = e.target.result;
                        };

                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                      };

                      </script>
                    </div>
                  </div>

                  <div class="col-md-7 pl-md-1">
                    <div class="row">
                      <div class="col-md-12 pr-md-1">
                        <div class="form-group">
                          <label><b>Descripcion:</b></label><br>
                          <textarea name="descripcion" class="form-control" rows="2" cols="80"><?php echo $producto->descripcion; ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 pl-md-1">
                      <div class="col-md-4 px-md-1">
                        <div class="form-group">
                          <label><b>color</b></label><br>
                          <input type="parte" class="form-control" name="color" value="<?php  echo $producto->color; ?>">
                        </div>
                      </div>
                      <div class="col-md-4 px-md-1">
                        <div class="form-group">
                          <label><b>ubicacion</b></label><br>
                          <input type="ubicacion" class="form-control" name="ubicacion" value="<?php  echo $producto->ubicacion; ?>">
                        </div>
                      </div>
                      <div class="col-md-4 px-md-1">
                        <div class="form-group">
                          <label><b>referencia</b></label><br>
                          <input type="text" class="form-control" name="referencia" value="<?php  echo $producto->referencia; ?>">
                        </div>
                      </div>
                      <div class="col-md-4 px-md-1">
                        <div class="form-group">
                          <label><b>año</b></label><br>
                          <input type="text" class="form-control" name="year" value="<?php  echo $producto->year; ?>">
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-md-12 pr-md-1">
                        <br>
                        <center><input type="submit" value="Actualizar" style="width:150px;background-color:<?php echo $nav->bg_color; ?>" class="form-control"></center>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<!-- Mirrored from design-graphma.com/demo/sedmy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 04:47:26 GMT -->
</html>
