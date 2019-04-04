<body >
  <div class="content" >
    <div class="row">
      <div class="col-lg-12" >
        <div class="card text-center">
          <div class="card-header" style="padding-bottom: 2px; background-color:black ">
            <h3 class="card-title" style="font-family: hughs; text-align:center; color: #0492E8">Algunos de nuestros productos</h3>
          </div>
          <style media="screen">
          .fondo-blur{
            position: relative;
            overflow: hidden;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            width: 100%;
            background-color: #66999;
          }

          .fondo-blur::before{
            content: '';
            display: block;
            background: inherit;
            position: absolute;

            width: 100%; height: 100%;
            left: 0; top: 0;
            filter: blur(3px);
          }
          </style>
          <div class="card-body fondo-blur " style="background-image: url(<?= base_url(); ?>images/5.jpg);">
            <div id="carouselExampleFade1"  class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner" >
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-5">
                      <center>
                        <div class="card text-white bg-secondary mb-3" style="width:50%;">
                          <img src="<?= base_url(); ?>images/5.jpg" style="width:100%" class="card-img-top" alt="...">
                          <div class="card-body" style="background-color: #AEC0B8">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary btn-sm" style="background-color: #e3f2fd; color: #007BFF;border-color: red">Detalles</a>
                            <a href="#" class="btn btn-primary btn-sm" style="background-color: #e3f2fd; color: #007BFF;border-color: red">Ver en tienda</a>
                          </div>
                        </div>
                      </center>
                    </div>
                    <div class="col-lg-5">
                      <center>
                        <div class="card text-white bg-secondary mb-3" style="width:50%">
                          <img src="<?= base_url(); ?>images/6.jpg" style="width:100%" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary btn-sm" style="background-color: #e3f2fd; color: #007BFF;border-color: red">Detalles</a>
                            <a href="#" class="btn btn-primary btn-sm" style="background-color: #e3f2fd; color: #007BFF;border-color: red">Ver en tienda</a>
                          </div>
                        </div>
                      </center>
                    </div>
                    <div class="col-lg-1">

                    </div>
                  </div>
                </div>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleFade1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" style="background-color:black" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleFade1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" style="background-color:black" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
              </a>
            </div>
          </div>
          <div class="card-footer text-muted">
            <a href="#" class="btn btn-primary" style="background-color: #e3f2fd; color: #007BFF">Ver todos</a>
          </div>
        </div>
      </div>
    </div><!--row-->
  </div><!--content-->
</body>
