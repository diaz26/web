<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section id="banner">
    <div class="content">
      <div class="container">
        <div class="col-md-10 col-12 ml-auto mr-auto">
          <h3><b>Agregar producto</b></h3>
          <hr>
          <form action="<?=base_url(); ?>index.php/Productos/agregardeverdad/" method="post"  enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-3 pr-md-1">
                <div class="form-group">
                  <label><b>Nombre:</b></label><br>
                  <input type="text" class="form-control" name="nombre" required>
                </div>
              </div>
              <div class="col-md-3 px-md-1">
                <div class="form-group">
                  <label><b>Marca:</b></label><br>
                  <input type="text" class="form-control" name="marca" required>
                </div>
              </div>
              <div class="col-md-3 px-md-1">
                <div class="form-group">
                  <label><b>Referencia:</b></label><br>
                  <input type="text" class="form-control" name="referencia" required>
                </div>
              </div>
              <div class="col-md-3 pl-md-1">
                <div class="form-group">
                  <label><b>Año:</b></label><br>
                  <input type="number" class="form-control" name="year" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 pr-md-1">
                <div class="form-group">
                  <label><b>Parte:</b></label><br>
                  <input type="text" class="form-control" name="parte"  required>
                </div>
              </div>
              <div class="col-md-3 px-md-1">
                <div class="form-group">
                  <label><b>Ubicacion:</b></label><br>
                  <input type="text" class="form-control" name="ubicacion" required>
                </div>
              </div>
              <div class="col-md-3 px-md-1">
                <div class="form-group">
                  <label><b>Color:</b></label><br>
                  <input type="text" class="form-control" name="color" required>
                </div>
              </div>
              <div class="col-md-3 pl-md-1">
                <div class="form-group">
                  <label><b>Precio:</b></label><br>
                  <input type="number" step="any" class="form-control" name="precio" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label><b>Descripcion:</b></label><br>
                  <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                </div>
              </div>
              <div class="col-md-6 pl-md-1">
                <div class="form-group">
                  <b>Imagen:</b><br><img src="" width="30%" id="imaproducto">
                  <input type="file" name="tcarga" id="upload" value="">
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
            </div>
            <div class="row">
              <div class="col-md-12 pl-md-1">
                <br>
                <center><input type="submit" value="Agregar" style="width:150px;border-color:<?php echo $nav->btn_bordercolor; ?>;color:<?php echo $nav->btn_bordercolor; ?> ;background-color:<?php echo $nav->btn_bgcolor; ?>" class="form-control"></center>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
<!-- Mirrored from design-graphma.com/demo/sedmy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 04:47:26 GMT -->
</html>
