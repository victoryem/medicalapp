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
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
    <div class="content">

    <div class="row g-3 mb-3">
            <div class="col-xl-12">
              <div class="card h-100">
                <div class="bg-holder bg-card" style="background-image:url(<?php echo base_url(); ?>assets/img/icons/spot-illustrations/corner-3.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-header z-index-1">
                  <h5 class="text-primary">Voir l'ordonnande ! </h5>
                  <h6 class="text-600"></h6>
                </div>
                <div class="card-body z-index-1">
                  <div class="row g-2 h-100 align-items-end">

                  </div>
                </div>
              </div>
            </div>
        </div>
      <hr>
      <div class="row g-3 mb-3">
            <div class="col-xl-12">
              <div class="card h-100">
              <div class="container shad  poppins">
        <div class="row align-items-start mt-5">
          <div class="col">
            <img src="<?php echo base_url(); ?>assets/img/ordonnance/logo.png" class="log">
            <?php echo $settings->description ?>,
          </div>
          <div class="col mx-5">
            
          </div>
          <div class="col tetx  mt-1">
            <p><?php echo $settings->adresse ?></p>
            <p><?php echo $settings->telephone1 ?> / <?php echo $settings->telephone2 ?></p>
            <p><?php echo $settings->ville ?>,<?php echo $settings->pays ?></p>
           
          </div>
        </div>
        
        <div class="mt-5 dat mb-5 fw-bold"> Date : <?php echo $patient->date ?> </div>
        <center > 
        <div class="mt-5 fw-bold text-decoration-underline text-uppercase "> ORDONNANCE MEDICALE </div>
        <div class="mt-5 fw-bold text-primary text-capitalize ">Patient: <?php echo $patient->nom ?> <?php echo $patient->prenom ?> </div>
    </center>
    <div id="show_alert"></div>
    <div>
    <table class="table mt-5" id="show_item">
        <thead>
          <tr class="fw-bold">
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Quantité</th>
            <th scope="col">Posologie</th>
            <th scope="col">Commentaire</th>
          </tr>
        </thead>
        <?php $i=1  ?>
        <tbody>  
            <?php foreach ($medicaments as $medicament): ?>
            <tr>
            <td scope="row" class="text-wrap"  width="1%"><?php echo $i++ ?></td>
            <td  width="25%"><h6 ><?php echo $medicament->nom  ?><span>(<?php echo $medicament->lib ?> || <?php echo $medicament->cat  ?>)</span></h6></td>
            <td  width="10%"><h6 ><?php echo $medicament->qte  ?></h6></td>
            <td  width="20%"><h6 ><?php echo $medicament->posologie  ?></h6></td>
            <td  width="30%"><h6 ><?php echo $medicament->commentaire  ?></h6></td>
          </tr>
          <?php endforeach; ?>
          </tbody>
      </table>
      
    </div>

      <div class="mt-5 sig ">
        <img src="<?php echo base_url(); ?>assets/img/ordonnance/sign.png" class="logg" alt="">
        <p class="fw-bold text-uppercase"><?php echo $this->session->userdata('nom') ?> <?php echo $this->session->userdata('prenom') ?></p>
      </div>
      <div class="mt-5 tetx fw-bold mb-2">NB: Merci de ramener l'ordonance pour le prochain rendez-vous.</div>
    </div>
              </div>
            </div>
      </div>
     
    <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Logiciel de gestion de prise de rendezvous médical <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy; <a href="https://rightcom.com">MedicalApp</a></p>
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
    
    <script src="<?php echo base_url(); ?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?php echo base_url(); ?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/theme.js"></script>
    


  </body>

</html>