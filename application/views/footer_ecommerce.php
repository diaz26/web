<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <footer class="footer" >
      <div class="footer-warpper">
        <div class="footer-top">
          <div class="container">
            <div class="footer-bottom-content clearfix">
              <div class="row">
                <div class="col-lg-4 col-md-4 ml-auto mr-auto">
                  <div class="logo-footer">
                    <a class="navbar-brand" href="<?= base_url(); ?>"> <img src="<?= base_url().$page->logo; ?>" alt=""><span><?= $page->nombre; ?></span></a>
                  </div>
                  <ul class="list-social list-inline">
                    <li>
                      <a href="#">
                        <i class="social_facebook "></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="social_twitter "></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="social_googleplus "></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-4 col-md-4 ml-auto mr-auto">
                  <h5>Contact Info</h5>
                  <ul class="list-menu contact-list">
                    <li>
                      <?= $page->email; ?>
                    </li>
                    <li>
                      <?= $page->celular; ?>
                     </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="copyright text-center">
                  <p>2019 © Copyright <?= $head->abreviacion; ?> All rights Reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
