<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from design-graphma.com/demo/sedmy/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 04:47:05 GMT -->
<head>
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

  <section id="home" class="hero">

    <div class="slide-home">

      <div class="slide-item">

        <div class="container">

          <div class="row hero-padd">

            <div class="col-md-6 col-12 col-sm-6">

              <div class="hero-text">

                <h2><?= $service->nombre; ?></h2>

                <p><?= $service->descripcion; ?></p>

                <p><?= $service->valor_text; ?> <span style="color:black ; font-size: 25px" ><?= $service->valor; ?>$ USD</span> </p>

                <a href="<?= base_url(); ?>payment/secure_s" class="form-control" style="text-align: center;width: 150px;color:<?= $head->color; ?> ;background-color: <?= $head->nav_bg; ?>"><?= $service->button; ?></a>

              </div>

            </div>

            <div class="col-md-6 col-12 col-sm-6">
              <img src="<?= base_url().$service->img; ?>" alt="" class="img-width">
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
