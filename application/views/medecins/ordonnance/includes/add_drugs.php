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
        
        <div class="mt-5 dat mb-5 fw-bold"> Date : 30/04/2022 </div>
        <center > 
        <div class="mt-5 fw-bold text-decoration-underline text-uppercase "> ORDONNANCE MEDICALE </div>
        <div class="mt-5 fw-bold text-primary text-capitalize "> <?php echo $patient->nom ?> <?php echo $patient->prenom ?> </div>
    </center>
    <div id="show_alert"></div>
    <form action="" method="post" id="add_form">
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
        <tbody>  
            <tr>
            <td scope="row" class="text-wrap"  width="1%">1</td>
            <td  width="25%">
            <?php if(!empty($medicaments)): ?>
              <select class="form-select" aria-label="Default select example" name="idmedoc[]" required>
                <option selected="">Sélectionner le médicament</option>
              <?php foreach ($medicaments as $medicament): ?>
            
                <option value="<?php echo $medicament->id  ?>"> <?php echo $medicament->nom  ?> <p><?php echo $medicament->libCategorie  ?> <span class="fw-medium text-600 ms-2"><?php echo $medicament->libForme ?></span></p> </option>
          
            <?php endforeach ?>
            </select>
            <?php else: ?>
              <input type="text" class="form-control item" placeholder="" type="text" name="" value="Aucune médicament trouvé." diseable>
            <?php endif; ?>
            </td>
            <td  width="10%">
            <input type="text" class="form-control item" placeholder="Quantité" type="text" name="qty[]" value="1" required>
            </td>
            <td  width="20%">
            <input type="textarea" class="form-control item" placeholder="Posologie" type="text" name="posologie[]" row="1" required>
            </td>
            <td  width="30%">
            <input type="textarea" class="form-control item" placeholder="Vos récommandations" type="text" name="commentaire[]" row="1" required>
            </td>
            <td width="9%">
            <button class="btn btn-success me-1 mb-1 add_item_btn" type="button">+</button>
            </td>
          </tr>
          </tbody>
      </table>
      <input type="hidden" name="idPatient" value="<?php echo $patient->id ?>">
      <input class="btn btn-primary me-1 mb-1" type="submit" value="Enregistrer" id="add_btn">
      </form>
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

      <script>
        $(document).ready(function(){
          $(".add_item_btn").click(function(e){
            e.preventDefault();
            $("#show_item").append(`
           
            <tbody class="append_item">  
            <tr>
            <td scope="row" class="text-wrap"  width="1%">1</td>
            <td  width="25%">
            <?php if(!empty($medicaments)): ?>
              <select class="form-select" aria-label="Default select example" name="idmedoc[]" required>
                <option selected="">Sélectionner le médicament</option>
              <?php foreach ($medicaments as $medicament): ?>
            
                <option value="<?php echo $medicament->id  ?>"> <?php echo $medicament->nom  ?> <p><?php echo $medicament->libCategorie  ?> <span class="fw-medium text-600 ms-2"><?php echo $medicament->libForme ?></span></p> </option>
          
            <?php endforeach ?>
            </select>
            <?php else: ?>
              <input type="text" class="form-control item" placeholder="" type="text" name="" value="Aucune médicament trouvé." diseable>
            <?php endif; ?>
            </td>
            <td  width="10%">
            <input type="text" class="form-control item" placeholder="Quantité" type="text" name="qty[]" value="1" required>
            </td>
            <td  width="20%">
            <input type="textarea" class="form-control item" placeholder="Posologie" type="text" name="posologie[]" row="1" required>
            </td>
            <td  width="30%">
            <input type="textarea" class="form-control item" placeholder="Vos récommandations" type="text" name="commentaire[]" row="1" required>
            </td>
            <td width="9%">
            <button class="btn btn-danger me-1 mb-1 remove_item_btn" type="button">-</button>
            </td>
          </tr>
          </tbody>
            ` );
          });
          $(document).on('click', '.remove_item_btn', function(e){
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
          });
          $("#add_form").submit(function(e){
              e.preventDefault();
              $("#add_btn").val('Adding...');
              $.ajax({
                url:'<?php echo base_url(); ?>medecins/Ordonnances/add_ordonnance_drug',
                method:'post',
                data: $(this).serialize(),
                success:function(response) {
                  console.log(response);
                  $("#add_btn").val("Add");
                  $("#add_form")[0].reset();
                  $(".append_item").remove();
                  $("#show_alert").html(`<div class="alert alert-success border-2 d-flex align-items-center" role="alert">
                      <div class="bg-success me-3 icon-item"><span class="fas fa-check-circle text-white fs-3"></span></div>
                      ${response}
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`)
                }
              });
          });

        });
      </script>

      