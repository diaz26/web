<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
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

</body>
</html>
