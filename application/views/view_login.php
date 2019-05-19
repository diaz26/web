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

            <div class="col-md-6 col-12 col-sm-6 ml-auto mr-auto">

              <div class="hero-text">
                <center><h2>Login</h2></center>
                <form action="<?= base_url(); ?>index.php/login/validar" method="post">

                  <div class="form-group">
                    <center><input style="width:50%;text-align: center" type="text" name="user" class="form-control" placeholder="User" required></center>
                  </div>
                  <div class="form-group">
                    <center><input style="width:50%;text-align: center" type="password" name="pass" class="form-control" placeholder="Password" required></center>
                  </div>
                  <div class="form-group">
                    <center><input type="submit" class="form-control" value="Ingresar" style="width:35%;background-color: <?= $head->nav_bg; ?>"></center>
                  </div>
                  <div class="input-group">
                    <?php echo $this->session->flashdata('msg'); ?>
                  </div>
                </form>

              </div>

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
