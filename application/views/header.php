<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title><?= $nav->nombre_web; ?></title>
  <link rel="shortcut icon" href="<?= base_url().$nav->logo; ?>" >
  <link rel="icon" href="<?= base_url().$nav->logo; ?>" >
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: <?= $nav->bg_color; ?>;">
    <a class="navbar-brand" href="<?= base_url(); ?>">
      <img src="<?= base_url().$nav->logo; ?>" width="30" height="30" class="d-inline-block align-top" alt="">
    <b style="font-family: <?= $nav->fuente ?>;font-size: <?= $nav->size; ?>px"><?= $nav->nombre; ?></b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" style="text-align: right">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>"><b style="font-family: <?= $nav->fuente ?>;font-size: <?= $nav->size; ?>px"><?= $nav->op1; ?></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>index.php/productos"><b style="font-family: <?= $nav->fuente ?>;font-size: <?= $nav->size; ?>px"><?= $nav->op2; ?></b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <b style="font-family: <?= $nav->fuente ?>;font-size: <?= $nav->size; ?>px"><?= $nav->op3; ?></b>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: <?= $nav->bg_color; ?>;">
            <a class="dropdown-item" href="<?= base_url(); ?>index.php/historia"><b style="font-family: <?= $nav->fuente ?>;font-size: <?= $nav->size; ?>px"><?= $nav->op31; ?></b></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url(); ?>index.php/contacto"><b style="font-family: <?= $nav->fuente ?>;font-size: <?= $nav->size; ?>px"><?= $nav->op32; ?></b></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url(); ?>index.php/proveedores"><b style="font-family: <?= $nav->fuente ?>;font-size: <?= $nav->size; ?>px"><?= $nav->op33; ?></b></a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><b style="font-family: <?= $nav->fuente ?>;font-size: <?= $nav->size; ?>px"><?= $nav->op4; ?></b> </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="<?= base_url(); ?>index.php/productos/search">
        <input class="form-control mr-sm-2" type="search" placeholder="<?= $nav->search; ?>" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="font-family: <?= $nav->fuente ?>;background-color: <?= $nav->btn_bgcolor; ?>; color: <?= $nav->btn_bordercolor; ?>;border-color: <?= $nav->btn_bordercolor; ?>">Buscar</button>
      </form>
    </div>
  </nav>

</body>
</html>
