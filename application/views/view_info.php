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
              <h3><b>Editar información</b></h3>
              <hr>
              <form action="<?= base_url() ?>index.php/informacion/modInf/" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <p style="color:black; font-size:18px"><b>Propietario</b> </p>
                    <div class="row">
                      <div class="col-md-8 pr-md-1" style="">
                        <div class="form-group">
                          <label><b>Nombres:</b></label><br>
                          <input type="text" name="nombres" class="form-control" value="<?php echo $info->nombres; ?>" required>
                          <input type="hidden" name="id" class="form-control" value="<?php echo $info->id; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8 pr-md-1" style="">
                        <div class="form-group">
                          <label><b>Apellidos:</b></label><br>
                          <input type="text" name="apellidos" class="form-control" value="<?php echo $info->apellidos; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 pr-md-1" style="">
                        <div class="form-group">
                          <label><b>Identificación:</b></label><br>
                          <input type="number" name="cc" class="form-control" value="<?php echo $info->cc; ?>" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <p style="color:black; font-size:18px"><b>Contacto</b></p>
                    <div class="row">
                      <div class="col-md-6 pr-md-1" style="">
                        <div class="form-group">
                          <label><b>Ciudad:</b></label><br>
                          <input type="text" name="ciudad" class="form-control" value="<?php echo $info->ciudad; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6 pl-md-1" style="">
                        <div class="form-group">
                          <label><b>Celular:</b></label><br>
                          <input type="number" name="celular" class="form-control" value="<?php echo $info->celular; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 pr-md-1" style="">
                        <div class="form-group">
                          <label><b>Direccion:</b></label><br>
                          <input type="text" name="direccion" class="form-control" value="<?php echo $info->direccion; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 pr-md-1" style="">
                        <div class="form-group">
                          <label><b>E-mail:</b></label><br>
                          <input type="email" name="email" class="form-control" value="<?php echo $info->email; ?>" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p style="color:black; font-size:18px"><b>Cuenta de pagos</b></p>
                <div class="row">
                  <div class="col-md-6 pr-md-1" style="">
                    <div class="form-group">
                      <label><b>Cuenta PayPal:</b></label><br>
                      <input type="email" name="paypal" class="form-control" value="<?php echo $info->paypal; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6 pl-md-1">
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
