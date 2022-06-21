<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?php echo $page_title ?></title>


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
    <script src="<?php echo base_url(); ?>vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="<?php echo base_url(); ?>assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="<?php echo base_url(); ?>assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="<?php echo base_url(); ?>assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link href="<?php echo base_url(); ?>vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />


  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
    <div class="content">
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand"></nav>
          
    <div class="card">
            <div class="card-body overflow-hidden p-lg-6">
              <div class="row align-items-center">
                <div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/icons/spot-illustrations/21.png" alt="" /></div>
                <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                  <h3 class="text-primary">Bienvenue sur MedicalApp !</h3>
                  <form action="<?php echo base_url(); ?>patients/patients/validation" method="post">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Votre code patient</label>
                    <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="MAxxxxx..." name ="code"/>
                    </div>
                        <input type="hidden" name="send" value="send">
                        <hr>
                    <button class="btn btn-primary me-1 mb-1" type="submit">Mon espace</button>
                  </form>
                  <p class="lead">Consulter l'état de vos demandes et bien plus... 👨‍⚕️</p>
                </div>
              </div>
            </div>
</div>

    








    <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">L'hôpital autrement <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy; <a href="#">MedicalApp</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v0.0.1</p>
              </div>
            </div>
        </footer>
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
    <script src="<?php echo base_url(); ?>assets/js/flatpickr.js"></script>


  </body>

</html>