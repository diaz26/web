<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section class="hero" id="informacion">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd">
            <div class="col-md-10 col-12 ml-auto mr-auto">
              <h3><b>Editar informacion</b></h3>
              <hr>
              <form action="<?= base_url() ?>index.php/admin/modNav" method="post" enctype="multipart/form-data">
                <p style="color:black; font-size:18px"><b>Navbar</b> </p>
                <div class="row">
                  <div class="col-md-5 pr-md-1" style="">
                    <div class="form-group">
                      <b>Logo:</b><br><img src="<?php echo base_url().$head->logo;?>" width="10%" id="algo">
                      <input type="file" name="tcarga" id="upload" value="<?php echo $head->logo; ?>">
                      <input type="hidden" name="id" value="<?php echo $head->id; ?>">

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
                  <div class="col-md-4 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Nombre:</b></label><br>
                      <input type="text" name="nombre" class="form-control" value="<?php echo $head->nombre; ?>">
                    </div>
                  </div>
                  <div class="col-md-3 pl-md-1" style="">
                    <div class="form-group">
                      <label><b>Abreviacion:</b></label><br>
                      <input type="text" name="abreviacion" class="form-control" value="<?php echo $head->abreviacion; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Fondo:</b></label><br>
                      <input type="text" name="nav_bg" class="form-control" value="<?php echo $head->nav_bg; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
                    </div>
                  </div>
                  <div class="col-md-3 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Color de textos:</b></label><br>
                      <input type="text" name="color" class="form-control" value="<?php echo $head->color; ?>" onclick="startColorPicker(this)" onkeyup="maskedHex(this)">
                    </div>
                  </div>
                  <div class="col-md-3 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Fuente:</b></label><br>
                      <input type="text" name="fuente" class="form-control" value="<?php echo $head->fuente; ?>">
                    </div>
                  </div>
                  <div class="col-md-3 pl-md-1" style="">
                    <div class="form-group">
                      <label><b>Tamaño:</b></label><br>
                      <input type="number" name="size" class="form-control" value="<?php echo $head->size; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Opcion 1:</b></label><br>
                      <input type="text" name="op1" class="form-control" value="<?php echo $head->op1; ?>">
                    </div>
                  </div>
                  <div class="col-md-3 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Opcion 2:</b></label><br>
                      <input type="text" name="op2" class="form-control" value="<?php echo $head->op2; ?>">
                    </div>
                  </div>
                  <div class="col-md-3 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Opcion 3:</b></label><br>
                      <input type="text" name="op3" class="form-control" value="<?php echo $head->op3; ?>">
                    </div>
                  </div>
                  <div class="col-md-3 pl-md-1" style="">
                    <div class="form-group">
                      <label><b>Opcion 4:</b></label><br>
                      <input type="text" name="op4" class="form-control" value="<?php echo $head->op4; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 pl-md-1">
                    <br>
                    <center><input type="submit" value="Actualizar" style="width:150px;background-color:<?php echo $head->nav_bg; ?>" class="form-control"></center>
                  </div>

                </div>

              </form>
              <hr>

              <p style="color:black; font-size:18px"><b>Banner</b> </p>
              <form action="<?= base_url() ?>index.php/admin/modBan1" method="post" enctype="multipart/form-data">
                <hr>
                <p style="color:black"><b>Item 1</b> </p>
                <div class="row">
                  <div class="col-md-4 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Titulo:</b></label><br>
                      <input type="text" name="ban_1_title" class="form-control" value="<?php echo $head->ban_1_title; ?>">
                    </div>
                  </div>
                  <div class="col-md-8 pl-md-1" style="">
                    <div class="form-group">
                      <label><b>Texto:</b></label><br>
                      <textarea name="ban_1_text" class="form-control" rows="2" cols="80"><?php echo $head->ban_1_text; ?></textarea>

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 pr-md-1" style="">
                    <div class="form-group">
                      <b>Imagen:</b><br><img src="<?php echo base_url().$head->ban_1_url_img;?>" width="100%" id="algo1">
                      <input type="file" name="tcarga" id="upload1" value="<?php echo $head->ban_1_url_img; ?>">
                      <input type="hidden" name="id" value="<?php echo $head->id; ?>">

                      <script>
                      document.getElementById("upload1").onchange = function() {
                        var reader = new FileReader(); //instanciamos el objeto de la api FileReader

                        reader.onload = function(e) {
                          document.getElementById("algo1").src = e.target.result;
                        };

                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                      };

                      </script>
                    </div>
                  </div>
                  <div class="col-md-7 pl-md-1" style="">
                    <div class="row">
                      <div class="col-md-12 pl-md-1" style="">
                        <div class="form-group">
                          <label><b>Video:</b></label><br>
                          <input type="text" name="ban_1_url_vid" class="form-control" value="<?php echo $head->ban_1_url_vid; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 pr-md-1">
                        <br>
                        <center><input type="submit" value="Actualizar" style="width:150px;background-color:<?php echo $head->nav_bg; ?>" class="form-control"></center>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <form action="<?= base_url() ?>index.php/admin/modBan2" method="post" enctype="multipart/form-data">
                <hr>
                <p style="color:black"><b>Item 2</b> </p>
                <div class="row">
                  <div class="col-md-4 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Titulo:</b></label><br>
                      <input type="text" name="ban_2_title" class="form-control" value="<?php echo $head->ban_2_title; ?>">
                    </div>
                  </div>
                  <div class="col-md-8 pl-md-1" style="">
                    <div class="form-group">
                      <label><b>Texto:</b></label><br>
                      <textarea name="ban_2_text" class="form-control" rows="2" cols="80"><?php echo $head->ban_2_text; ?></textarea>

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 pr-md-1" style="">
                    <div class="form-group">
                      <b>Imagen:</b><br><img src="<?php echo base_url().$head->ban_2_url_img;?>" width="100%" id="algo2">
                      <input type="file" name="tcarga" id="upload2" value="<?php echo $head->ban_2_url_img; ?>">
                      <input type="hidden" name="id" value="<?php echo $head->id; ?>">

                      <script>
                      document.getElementById("upload2").onchange = function() {
                        var reader = new FileReader(); //instanciamos el objeto de la api FileReader

                        reader.onload = function(e) {
                          document.getElementById("algo2").src = e.target.result;
                        };

                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                      };

                      </script>
                    </div>
                  </div>
                  <div class="col-md-7 pr-md-1">
                    <br>
                    <br>
                    <center><input type="submit" value="Actualizar" style="width:150px;background-color:<?php echo $head->nav_bg; ?>" class="form-control"></center>
                  </div>
                </div>

              </form>
              <hr>
              <form action="<?= base_url() ?>index.php/admin/modFoot" method="post">
                <p style="color:black; font-size:18px"><b>Footer</b> </p>
                <div class="row">
                  <div class="col-md-4 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Section text:</b></label><br>
                      <input type="text" name="sec_text" class="form-control" value="<?php echo $head->sec_text; ?>">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $head->id; ?>">
                    </div>
                  </div>
                  <div class="col-md-4 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Search:</b></label><br>
                      <input type="text" name="search" class="form-control" value="<?php echo $head->search; ?>">
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1" style="">
                    <div class="form-group">
                      <br>
                      <center><input type="submit" value="Actualizar" style="width:150px;background-color:<?php echo $head->nav_bg; ?>" class="form-control"></center>
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
  <hr>
  <section class="hero" id="servicio">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd">
            <div class="col-md-10 col-12 col-sm-10 ml-auto mr-auto">
              <h3><b>Editar Servicio</b></h3>
              <hr>
              <form action="<?= base_url() ?>index.php/admin/modPar" method="post">
                <p style="color:black; font-size:18px"><b>Parametros</b> </p>
                <div class="row">
                  <div class="col-md-4 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Valor:</b></label><br>
                      <input type="number" name="valor" class="form-control" value="<?php echo $service->valor; ?>">
                      <input type="hidden" name="id" value="<?php echo $service->id; ?>">
                    </div>
                  </div>
                  <div class="col-md-4 px-md-1" style="">
                    <div class="form-group">
                      <label><b>Días:</b></label><br>
                      <input type="number" name="dias" class="form-control" value="<?php echo $service->dias; ?>">
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1" style="">
                    <br>
                    <center><input type="submit" value="Actualizar" style="width:150px;background-color:<?php echo $head->nav_bg; ?>" class="form-control"></center>
                  </div>
                </div>
              </form>
              <hr>
              <form action="<?= base_url() ?>index.php/admin/modVisSer" method="post" enctype="multipart/form-data">
                <p style="color:black; font-size:18px"><b>Vista</b> </p>
                <div class="row">
                  <div class="col-md-5" style="">
                    <div class="form-group">
                      <b>Imagen:</b><br><img src="<?php echo base_url().$service->img;?>" width="90%" id="algox">
                      <input type="file" name="tcarga" id="uploadx" value="<?php echo $service->img; ?>">
                      <input type="hidden" name="id" value="<?php echo $service->id; ?>">

                      <script>
                      document.getElementById("uploadx").onchange = function() {
                        var reader = new FileReader(); //instanciamos el objeto de la api FileReader

                        reader.onload = function(e) {
                          document.getElementById("algox").src = e.target.result;
                        };

                        // read the image file as a data URL.
                        reader.readAsDataURL(this.files[0]);
                      };

                      </script>
                    </div>
                  </div>
                  <div class="col-md-7" style="">
                    <div class="row">
                      <div class="col-md-5 pr-md-1" style="">
                        <div class="form-group">
                          <label><b>Nombre:</b></label><br>
                          <input type="text" name="nombre" class="form-control" value="<?php echo $service->nombre; ?>">
                        </div>
                      </div>
                      <div class="col-md-7 pl-md-1" style="">
                        <div class="form-group">
                          <label><b>Texto valor:</b></label><br>
                          <input type="text" name="valor_text" class="form-control" value="<?php echo $service->valor_text; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="">
                        <div class="form-group">
                          <label><b>Descripcion:</b></label><br>
                          <textarea name="descripcion" class="form-control" rows="2" cols="80"><?php echo $service->descripcion; ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="">
                        <div class="row">
                          <div class="col-md-6 pr-md-1" style="">
                            <div class="form-group">
                              <label><b>Botón:</b></label><br>
                              <input type="text" name="button" class="form-control" value="<?php echo $service->button; ?>">
                            </div>
                          </div>
                          <div class="col-md-6 pl-md-1" style="">
                            <br>
                            <center><input type="submit" value="Actualizar" style="width:150px;background-color:<?php echo $head->nav_bg; ?>" class="form-control"></center>
                          </div>
                        </div>
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
