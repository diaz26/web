<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

  <section id="home" class="hero">
    <div class="slide-home">
      <div class="slide-item">
        <div class="container">
          <div class="row hero-padd" style="padding-top: 100px;">
            <div class="col-md-10 col-12 ml-auto mr-auto">
              <div class="hero-text">
                <div class="row">
                  <div class="col-md-6">
                    <div class="alert alert-danger" role="alert">
                      <center>Recuerda hacer las respectivas entregas de tus nuevos pedidos<br><a href="<?= base_url(); ?>index.php/pedidos"><?php echo "---->  Míralos Aquí  <----"; ?></a></center>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                      <center>Este es el link de tu página<br><a href="<?= base_url()."index.php/welcome/to/".$page->nombre; ?>"><?php echo base_url()."index.php/welcome/to/".$page->nombre; ?></a></center>
                    </div>
                  </div>
                </div>

                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <h1 class="display-4">Bienvenido</h1>
                      </div>
                      <div class="col-md-6">
                        <h4>Configura tu página siguiendo los pasos:</h4>
                        <ul>
                          <li><b>1.</b> Completa tu información <a href="<?= base_url(); ?>index.php/informacion">aquí</a></li>
                          <li><b>2.</b> Configura tu página de ventas <a href="<?= base_url(); ?>index.php/pagina">aquí</a></li>
                          <li><b>3.</b> Administra tus productos <a href="<?= base_url(); ?>index.php/productos">aquí</a></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
