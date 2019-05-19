<!DOCTYPE html>
<html lang="en" dir="ltr">
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
<body>

  <header class="navbar-header">

    <nav class="navbar navbar-expand-lg fixed-top" style="background-color:<?= $page->nav_bg; ?>">
      <div class="container" style="background-color:<?= $page->nav_bg; ?>">

        <a class="navbar-brand" href="<?= base_url(); ?>"> <img src="<?= base_url().$page->logo; ?>" alt="">
          <span style="font-size: 16px;color:<?= $page->nav_color; ?>"><?= $page->nombre; ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon  icon_menu" style="color:<?= $page->nav_color; ?>"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto" style="background-color:<?= $page->nav_bg; ?>">
            <li class="nav-item">
              <a data-scroll="" class="nav-link section-scroll" href="<?= base_url(); ?>index.php/cliente"><span style="font-size: 16px;color:<?= $page->nav_color; ?>">Carrito</span></a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
