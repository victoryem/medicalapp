<div class="card">
            <div class="card-body overflow-hidden p-lg-6">
              <div class="row align-items-center">
                <div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/icons/spot-illustrations/21.png" alt="" /></div>
                <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                  <h3 class="text-primary">Bienvenue sur MedicalApp !</h3>
                  <form action="<?php echo base_url(); ?>appointement/next" method="post">
                  <label for="organizerSingle">Choisir le département</label>
                        <select class="form-select js-choice" id="organizerSingle" size="1" name="id" data-options='{"removeItemButton":true,"placeholder":true}'>
                        <option selected="">Sélectionner</option>
                        <?php foreach ($departements as $departement): ?>
                            <option value="<?php echo $departement->id; ?>"><?php echo $departement->libDepartement; ?> </option>
                        <?php endforeach ?>
                        </select>
                        <hr>
                    <button class="btn btn-primary me-1 mb-1" type="submit">Continuer</button>
                  </form>
                  <p class="lead">Vous etes à un pas de votre rendez-vous 👨‍⚕️.</p>
                </div>
              </div>
            </div>
</div>