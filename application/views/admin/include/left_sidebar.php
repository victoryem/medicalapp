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
    <link href="<?php echo base_url(); ?>vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/plyr/plyr.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/fullcalendar/main.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="<?php echo base_url(); ?>assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="<?php echo base_url(); ?>assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="<?php echo base_url(); ?>assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
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
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div><a class="navbar-brand" href="#">
              <div class="d-flex align-items-center py-3"><span class="font-sans-serif">MedicalApp</span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard/" role="button" data-bs-toggle="" aria-expanded="false" >
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Tableau de bord</span>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Utilisateurs
                    </div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  <!-- parent pages--><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard/users" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Tous les Utilisateurs</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard/admins" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Administrateur</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard/doctors" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Médecins</span>
                    </div>
                  </a>
                  <!-- parent pages--><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard/secretaires" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Secretaires</span>
                    </div>
                  </a>
                </li>
                  

                
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Configuration
                    </div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  <!-- parent pages--><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard/config"role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Configurer le cabinet</span>
                    </div>
                  </a>
                </li>

                  <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Departements médicals
                    </div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  <!-- parent pages--><a class="nav-link" href="<?php echo base_url(); ?>admin/departement" role="button" data-bs-toggle="" aria-expanded="false" aria-controls="forms">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Voir</span>
                    </div>
                  </a>
                  </li>
                   
              </ul>
              
            </div>
          </div>
        </nav>