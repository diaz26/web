<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!--Metas-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="LeadDigital  Landing page Template">
  <!--Titulo-->
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
  <!--JS-->
  <script src="<?= base_url(); ?>assets/js/modernizr.js"></script>
</head>
<body>
  <div id="loading-page">
    <div id="loading-center-page">
      <div id="loading-center-absolute">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <?php
  if (1==1){
    //if (isset($_REQUEST['id'])){

    //URL Paypal Modo pruebas.
    $paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
    //URL Paypal para Recibir pagos
    //$paypal_url = 'https://www.paypal.com/cgi-bin/webscr';


    //Pon aqui la URL para redireccionar cuando el pago es completado
    $cancel_return = base_url()."index.php/productos";
    //Colocal la URL donde se redicciona cuando el pago fue completado con exito.
    $success_return = base_url()."index.php/carrito/insertPago/".$cod_pedido."/".$id_usuario."/".$valor_pago;


    $notify_url = base_url()."index.php/carrito/insertPago/".$cod_pedido."/".$id_usuario."/".$valor_pago; //$codpedido,$idusuario,$value
    //Pon aqui la URL para redireccionar cuando el pago es completado

    ?>
      <form name="myform" action="<?php echo $paypal_url; ?>" method="post" target="_top">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="cancel_return" value="<?php echo $cancel_return; ?>">
        <input type="hidden" name="return" value="<?php echo $success_return; ?>">
        <input type="hidden" name="notify_url" value="<?php echo $notify_url; ?>">
        <input type="hidden" name="business" value="<?php echo $cuenta_paypal; ?>">
        <input type="hidden" name="item_name" value="<?php echo $nombre_producto; ?>">
        <input type="hidden" name="amount" value="<?php echo $valor_pago; ?>">
        <input type="hidden" name="currency_code" value="<?php echo $moneda; ?>">
        <input type="hidden" name="button_subtype" value="services">
        <input type="hidden" name="no_note" value="0">
      </form>
      <script type="text/javascript">
      document.myform.submit();
      </script>
      <?php

    } else {
      //header("location:productos.php");
      exit;
    }
    ?>
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
  </html>
