<!DOCTYPE html>
<html lang="en">
<head>

    <!--Metas-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LeadDigital  Landing page Template">
    <!--Titulo-->
    <title><?= $page->nombre; ?></title>
    <!--Css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <!--elegant icon font -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/elegant-icons.css">
    <!--Animate -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
    <!-- Slick -carousel-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
    <!-- Magnific Popup-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <!--Template Stylesheets css-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
    <!-- Fonts styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url().$page->logo; ?>" >
    <link rel="icon" href="<?= base_url().$page->logo; ?>" >
    <!--JS-->
    <script src="<?= base_url(); ?>assets/js/modernizr.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section id="home" class="hero">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd">
            <div class="col-md-5">
              <div class="widget widget-box widget-shop-category active" style=" background-color:#E6E6E6 ">
                <div style="color:#0D7BA3; font-weight: bold  " type="button" data-toggle="collapse" data-target="#accordion-ul-1" aria-expanded="false" aria-controls="accordion-ul-1">
                  <button type="button" class="btn btn-outline-primary btn-sm">+</button>
                  Resumen de pedido -
                  <font style="color:#000000; font-weight: normal; font-size: 20px"> Total <?php echo $Subtotalcar; ?> $USD </font>
                  <!--br>
                  <font style="color:#000000; font-weight: normal" >Tienes (total articulos) Artículos</font-->
                </div>
                <br><br><br>
                <div class="collapse" id="accordion-ul-1" aria-expanded="false"  style="margin-left: 5px; margin-right: 5px">
                  <div class="">
                    <div class="">
                      <?php
                      if(isset($_SESSION['carrito'])){
                        $datos=$_SESSION['carrito'];
                        for($i=0;$i<count($datos);$i++){
                          ?>
                          <div class="product">
                            <div class="row" style=" text-align: center; ">
                              <div class="col-md-2 col-xs-2" style="text-align: center; vertical-align: middle">
                                <img width="100%"  src=" <?php echo base_url().$datos[$i]['Urlimagen'];  ?> " alt="Product">
                              </div>
                              <div class="col-md-4 col-xs-4" style="text-align: center; vertical-align: middle; font-size: 10px">
                                <?php echo $datos[$i]['Nombre']; ?><br>
                              </div>
                              <div class="col-md-4 col-xs-4" style="text-align: center; vertical-align: middle; font-size: 10px">
                                <p  style="font-size: 20px; text-align:center ;">
                                  <font style=" font-size: 10px; background: #FFFFFF">CANTIDAD</font><br>
                                  <a  href="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito?id=<?php echo $datos[$i]['Id']; ?>&ban=delete&page=<?php echo $page->nombre; ?>" style=" font-weight: bold">  -  </a>
                                  <?php echo $datos[$i]['Cantidad'];?>
                                  <a href="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito?id=<?php echo $datos[$i]['Id']; ?>&ban=agrega&page=<?php echo $page->nombre; ?>"  style=" font-weight: bold">  +  </a>
                                </p>
                              </div>
                              <div class="col-md-2 col-xs-2" style="text-align: left; vertical-align: middle; font-size: 10px">
                                <?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?>
                              </div>
                            </div>

                          </div><!-- End .product- -->
                          <?php
                        }
                      }
                      ?>
                      <hr>
                    </div><!-- End .droopdowm-menu-wrapper -->
                    <div class="" style="font-size: 20px">

                      <div class="row" style="vertical-align: middle">
                        <div class="col-md-6 col-xs-6" style="text-align: left; vertical-align: middle">
                          TOTAL:
                        </div>
                        <div class="col-md-6 col-xs-6" style="text-align:right; vertical-align: middle;font-weight: bold">
                          <?php echo $Subtotalcar; ?>
                        </div>
                      </div>
                    </div><!-- End .cart-dropdown-action -->
                  </div><!-- End .dropdown-menu -->
                </div>
              </div><!-- End .widget -->
            </div><!-- End .col-md-3 -->

            <div class="col-md-7  ">
              <div class="checkout-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs text-right" role="tablist">
                  <li role="presentation" class="active"><a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab"><span>1/3</span>Datos de envío</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="shipping">
                    <?php echo $this->session->flashdata('reco'); ?>
                    <form  action="<?= base_url() ?>index.php/carrito/generapedido/" method="post" onsubmit="return validacion()" enctype="multipart/form-data" class="signup-form target-area active">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Correo Electrónico*</label>
                          <input type="email" id="correoc" name="correoc" class="form-control" required>
                        </div><!-- End .form-group -->
                        <div class="checkbox pull-left">
                        </div><!-- End .checkbox -->
                      </div><!-- End .col-sm-4 -->
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nombre completo*</label>
                            <input type="text" id="nombrec" name="nombrec" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Celular*</label>
                            <input type="text" id="celularc" name="celularc" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Dirección*</label>
                            <input type="text" id="direccionc" name="direccionc" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                      </div><!-- End .row -->
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Departamento*</label>
                            <input type="text" id="departamentoc" name="departamentoc"class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Ciudad*</label>
                            <input type="text" id="ciudadc" name="ciudadc" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                      </div><!-- End .row -->
                      <input type="hidden"  name="valorpago" class="form-control" value="<?php echo $Subtotalcar; ?>">

                      <?php
                      $cant_pro=count($_SESSION['carrito']);
                      ?>
                      <input type="hidden"  name="cant_pro" class="form-control" value="<?php echo $cant_pro; ?>">
                      <br>
                      <div class="col-sm-12" style="text-align:center">
                        <div class="clearfix form-action">
                          <span class="input-group-btn">
                            <center><img src="<? base_url(); ?>images/PayPal.png" alt=""></center>
                            <input style="background:#02B939;text-align:center" type="submit" class="btn btn-primary btn-sm" value="COMPRAR">
                          </span>
                        </div><!-- End .form-action -->
                      </div>
                    </form>
                  </div><!-- End .tab-pane -->
                </div>
              </div><!-- End .product-details-tab -->
            </div><!-- End .col-md-9 -->
          </div><!-- End .row -->
        </div>
      </div>
    </div>
  </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
