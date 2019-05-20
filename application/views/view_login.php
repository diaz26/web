<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section id="home" class="hero">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd" style="padding-top: 100px">
            <div class="col-md-6 col-12 col-sm-6 ml-auto mr-auto">
              <div class="hero-text">
                <center><h2 style="font-family:<?= $nav->fuente; ?>">Login</h2>
                <form action="<?= base_url(); ?>index.php/Login/valida" method="post">
                  <?php echo $this->session->flashdata('msg'); ?>
                  <div class="form-group">
                    <input style="width:50%;text-align: center" type="text" name="user" class="form-control" placeholder="User" required>
                  </div>
                  <div class="form-group">
                    <input style="width:50%;text-align: center" type="password" name="pass" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Ingresar" style="font-family:<?= $nav->fuente; ?>;width:150px;border-color:<?php echo $nav->btn_bordercolor; ?>;color:<?php echo $nav->btn_bordercolor; ?> ;background-color:<?php echo $nav->btn_bgcolor; ?>" class="form-control">
                  </div>
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
