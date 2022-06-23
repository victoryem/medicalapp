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

     
      