<!DOCTYPE html>
<html lang="en">
<head>

    <!--Metas-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LeadDigital  Landing page Template">
    <!--Titulo-->
    <title><?= $nav->nombre; ?></title>
    <!-- Fonts styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url().$nav->logo; ?>" >
    <link rel="icon" href="<?= base_url().$nav->logo; ?>" >
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <section id="home" class="hero">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd" style="padding-top: 30px">
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
                                  <a  href="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito?id=<?php echo $datos[$i]['Id']; ?>&ban=delete" style=" font-weight: bold">  -  </a>
                                  <?php echo $datos[$i]['Cantidad'];?>
                                  <a href="<?php echo base_url(); ?>index.php/carrito/agrega_item_carrito?id=<?php echo $datos[$i]['Id']; ?>&ban=agrega"  style=" font-weight: bold">  +  </a>
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
                <!-- Tab panes -->
                <center> <h4> Completa el siguiente formulario para terminar la compra</h4> </center>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="shipping">
                    <?php echo $this->session->flashdata('reco'); ?>
                    <form  action="<?= base_url() ?>index.php/carrito/generapedido/" method="post" onsubmit="return validacion()" enctype="multipart/form-data" class="signup-form target-area active">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Correo Electrónico*</label>
                            <input type="email" id="correoc" name="correo" class="form-control" required>
                          </div><!-- End .form-group -->
                          <div class="checkbox pull-left">
                          </div><!-- End .checkbox -->
                        </div><!-- End .col-sm-4 -->
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nombre completo*</label>
                            <input type="text" id="nombrec" name="nombre" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Celular*</label>
                            <input type="text" id="celularc" name="celular" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>C.C.*</label>
                            <input type="text" id="cedula" name="cedula" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                        <div class="col-sm-9">
                          <div class="form-group">
                            <label>Dirección*</label>
                            <input type="text" id="direccionc" name="direccion" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                      </div><!-- End .row -->
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Departamento*</label>
                            <input type="text" id="departamentoc" name="departamento" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Ciudad*</label>
                            <input type="text" id="ciudadc" name="ciudad" class="form-control" required>
                          </div><!-- End .form-group -->
                        </div><!-- End .col-sm-4 -->
                      </div><!-- End .row -->
                      <input type="hidden"  name="valorpago" class="form-control" value="<?php echo $Subtotalcar; ?>">
                      <?php
                      $cant_pro=0;
                      if(isset($_SESSION['carrito'])){
                      $cant_pro=count($_SESSION['carrito']);
                    }
                      ?>
                      <input type="hidden" name="cant_pro" class="form-control" value="<?php echo $cant_pro; ?>">
                      <hr>
                      <div class="row">
                        <div class="col-sm-5 ml-auto mr-auto">
                          <img src="<?= base_url(); ?>images/PayPal.png" alt="">
                        </div>
                      </div>
                      <hr>
                      <div class="col-sm-12" style="text-align:center">
                        <div class="clearfix form-action">
                          <span class="input-group-btn">
                            <center><img src="<? base_url(); ?>images/PayPal.png" alt="">
                            <input style="width: 150px;font-family: <?= $nav->fuente; ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color:<?= $nav->btn_bordercolor; ?>" type="submit" class="form-control" value="COMPRAR"></center>
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

</body>
</html>
