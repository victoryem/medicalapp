<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Page de Connexion | MedicalApp</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?php echo base_url(); ?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="<?php echo base_url(); ?>assets/css/user.min.css" rel="stylesheet" id="user-style-default">
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
          <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="<?php echo base_url(); ?>assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="<?php echo base_url(); ?>assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
            <div class="card overflow-hidden z-index-1">
              <div class="card-body p-0">
                <div class="row g-0 h-100">
                  <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url(<?php echo base_url(); ?>assets/img/icons/spot-illustrations/half-circle.png);">
                      </div>
                      <!--/.bg-holder-->

                      <div class="z-index-1 position-relative"><a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="#">MedicalApp</a>
                        <p class="opacity-75 text-white"></p>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <h3>Conectez-vous à votre compte</h3>
                        </div>
                        <?php
                        if($this->session->flashdata('message'))
                        {
                            echo '
                            <div class="alert alert-success">
                                '.$this->session->flashdata("message").'
                            </div>
                            ';
                        }
                    ?>
                    <?php
                    if($this->session->flashdata('msg'))
                        {
                            echo '
                            <div class="alert alert-success">
                                '.$this->session->flashdata("msg").'
                            </div>
                            ';
                        }
                    ?>
                      </div>
                      <form method="post" action="<?php echo base_url(); ?>login/validation">
                        <div class="mb-3">
                          <label class="form-label" for="card-email">Email</label>
                          <input class="form-control" id="card-email" type="email" name="email" value="<?php echo set_value('email'); ?>"/>
                          <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-password">Mot de passe</label>                           
                          </div>
                          <input class="form-control" id="card-password" type="password" value="<?php echo set_value('password'); ?>" name="password" />
                          <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="row flex-between-center">
                          <div class="col-auto"><a class="fs--1" href="pages/authentication/card/forgot-password.html">Mot de passe oublié</a></div>
                        </div>
                        <div class="mb-3">
                          <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="login" value="Login">Connexion</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?php echo base_url(); ?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/is/is.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo base_url(); ?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>

  </body>

</html>