<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section class="hero" id="informacion">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd" style="padding-top: 100px;">
            <div class="col-md-10 col-12 ml-auto mr-auto">
              <h3><b>Configurar Página</b></h3>
              <hr>
              <form action="<?= base_url() ?>index.php/pagina/modPage" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-5 pr-md-1" style="">
                    <div class="form-group">
                      <b>Logo:</b><br><img src="<?= base_url().$page->logo;?>" width="10%" id="logo" alt="Sin logo">
                      <input type="file" name="logo" id="upload" value="<?php echo $page->logo; ?>">
                      <input type="hidden" name="id" value="<?php echo $page->id; ?>">

                      <script>
                      document.getElementById("upload").onchange = function() {
                        var reader = new FileReader(); //instanciamos el objeto de la api FileReader

                        reader.onload = function(e) {
                          document.getElementById("logo").src = e.target.result;
                        };

                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                      };

                      </script>
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1 ml-auto mr-auto" style="">
                    <div class="form-group">
                      <label><b>Nombre:</b></label><br>
                      <input type="text" name="nombre" class="form-control" value="<?php echo $page->nombre; ?>" required>
                      <input type="hidden" name="id" value="<?php echo $page->id; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Descripcion (opcional):</b></label><br>
                      <textarea name="descripcion" class="form-control" rows="2"><?php echo $page->descripcion; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Video YouTube (opcional):</b></label><br>
                      <input type="text" name="yt" class="form-control" value="<?php echo $page->yt; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Color del Menú:</b></label><br>
                      <input type="text" name="nav_bg" class="form-control" value="<?php echo $page->nav_bg; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
                    </div>
                  </div>
                  <div class="col-md-3 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Color de texto:</b></label><br>
                      <input type="text" name="nav_color" class="form-control" value="<?php echo $page->nav_color; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
                    </div>
                  </div>
                  <div class="col-md-3 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Color de fondo:</b></label><br>
                      <input type="text" name="body_bg" class="form-control" value="<?php echo $page->body_bg; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
                    </div>
                  </div>
                  <div class="col-md-3 pl-md-1" style="">
                    <br>
                    <center><input type="submit" value="Actualizar" style="width:150px;background-color:<?php echo $head->nav_bg; ?>" class="form-control"></center>
                  </div>
                </div>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<!-- Mirrored from design-graphma.com/demo/sedmy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 04:47:26 GMT -->
</html>
