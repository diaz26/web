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
              <h3><b>Agregar productos</b></h3>
              <form action="<?=base_url(); ?>index.php/Productos/agregardeverdad/" method="post"  enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                      <label><b>Nombre</b></label><br>
                      <input type="text" class="form-control" name="Nombre" value="">
                    </div>
                  </div>
                  <div class="col-md-4 px-md-1">
                    <div class="form-group">
                      <label><b>Marca</b></label><br>
                      <input type="text" class="form-control" name="Marca" value="">
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label><b>Precio</b></label><br>
                      <input type="number" class="form-control" name="Precio" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 pr-md-1">
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
                  <div class="col-md-7 pl-md-1">
                    <div class="row">
                      <div class="col-md-12 pr-md-1">
                        <div class="form-group">
                          <label><b>Descripcion:</b></label><br>
                          <textarea name="Descripcion" class="form-control" rows="2" cols="80"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 pr-md-1">
                        <br>
                        <center><input type="submit" value="Agregar" style="width:150px;background-color:<?php echo $head->nav_bg; ?>" class="form-control"></center>
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

  <script src="<?= base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.easing.js"></script>
  <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/magnific-popup.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/slick.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>
<!-- Mirrored from design-graphma.com/demo/sedmy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 04:47:26 GMT -->
</html>
