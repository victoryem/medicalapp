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
          
         
<div class="row mt-5 mt-lg-0 mt-xl-5 mt-xxl-0">

            <div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
              <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-capsules"></i></span>
                <div class="col">
                  <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Vos informations personnelle.</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
                  <p class="mb-0">Remplir ces informations pour terminer votre inscription.</p>
                </div>
              </div>
              <div class="card theme-wizard mb-5">
                <div class="card-header bg-light pt-3 pb-2">
                  <ul class="nav nav-pills mb-6" role="tablist" id="pill-tab1">
                    <li class="nav-item" role="presentation">
                    </li>
                  </ul>
                </div>
                <div class="card-body py-4">
                  <div class="tab-content">
                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="form-wizard-tab1" id="form-wizard-tab1">
                      <form   method="post" action="<?php echo base_url(); ?>Register/complet_registration">
                        <div class="mb-3">
                        <input type="text" name="nom" class="form-control" disabled value="<?php echo $nom; ?>" />
                             <span class="text-danger"><?php echo form_error('nom'); ?></span>
                        </div>
                        <div class="mb-3">
                        <label>Prénoms</label>
                            <input type="text" name="prenom" class="form-control" disabled value="<?php echo $prenom; ?>" />
                            <span class="text-danger"><?php echo form_error('prenom'); ?></span>
                        </div>
                        
                        <div class="row g-2">
                          <div class="col-12">
                            <div class="mb-3">
                            <label>Email</label>
                                <input type="email" name="email" disabled class="form-control" value="<?php echo $email; ?>" />
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                          </div>
                        </div><div class="mb-3">
                        <label>Mot de Passe</label>
                            <input type="password" name="password" class="form-control" />
                            <span class="text-danger"><?php echo form_error('role'); ?></span>
                        </div>
                        <div class="mb-3">
                        <label>Confirmer le Mot de Passe</label>
                            <input type="password" name="password_confirm" class="form-control" />
                            <span class="text-danger"><?php echo form_error('password_confirm'); ?></span>
                        </div>
                        <div class="mb-3">
                        <label>Téléphone</label>
                            <input type="text" name="phone"  class="form-control"  />
                            <span class="text-danger"><?php echo form_error('phone'); ?></span>
                        </div>
                        <div class="mb-3">
                        <label>Adresse</label>
                            <input type="text" name="adresse"  class="form-control" placeholder="120 Rue des Cheminots, Jonquet" />
                            <span class="text-danger"><?php echo form_error('adresse'); ?></span>
                        </div>
                        <input type="hidden" name="user_id" value="<?php echo $id ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        <div class="mb-3">
                        <button class="btn btn-primary px-5 px-sm-6" type="submit">Valider<span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span></button>
                        </div>
                      </form>
                      </div>
                  </div>
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