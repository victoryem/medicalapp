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
        <div class="mt-5 fw-bold"> N°: <input  style="width:20%" type="text" class="form-control item" placeholder="001" type="text" name="nom[]" value="0456"></div>
        <div class="mt-5 dat mb-5 fw-bold"> Date : 30/04/2022 </div>
        <center >
        <div class="mt-5 fw-bold text-decoration-underline text-uppercase "> ORDONNANCE MEDICALE </div>
        <div class="mt-5 fw-bold text-primary text-capitalize "> <?php echo $patient->nom ?> <?php echo $patient->prenom ?> </div>
    </center>
    <div>
    <table class="table mt-5">
        <thead>
          <tr class="fw-bold">
            <th scope="col">Numéro</th>
            <th scope="col">Nom</th>
            <th scope="col">Quantité</th>
            <th scope="col">Posologie</th>
            <th scope="col">Commentaire</th>
          </tr>
        </thead>
        <tbody>




     
          
          
          
          <tr>
            <td scope="row" class="text-wrap"  width="5%">1</th>
            <td  width="25%">
            <input type="text" class="form-control item" placeholder="Médicament" type="text" name="nom[]" value="">
            </td>
            <td  width="10%">
            <input type="text" class="form-control item" placeholder="Quantité" type="text" name="qty[]" value="1">
            </td>
            <td  width="20%">
            <input type="text" class="form-control item" placeholder="Posologie" type="text" name="posologie[]">
            </td>
            <td  width="30%">
            <input type="text" class="form-control item" placeholder="Vos récommandations" type="text" name="commentaire[]">
            </td>
            <td width="10%"></td>
          </tr>
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