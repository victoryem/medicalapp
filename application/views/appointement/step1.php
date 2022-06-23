<div class="card">
                            <?php
                                if($this->session->flashdata('sucess'))
                                {
                                    echo '
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    '.$this->session->flashdata("sucess").'
                                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    ';
                                }
                            ?>
                            <?php
                            if($this->session->flashdata('warning'))
                                {
                                    echo '
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    '.$this->session->flashdata("warning").'
                                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    ';
                                }
                            ?>
                            <?php
                            if($this->session->flashdata('error'))
                                {
                                    echo '
                          
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    '.$this->session->flashdata("error").'
                                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    ';
                                }
                            ?>
            <div class="card-body overflow-hidden p-lg-6">
              <div class="row align-items-center">
                <div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/icons/spot-illustrations/21.png" alt="" /></div>
                <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                  <h3 class="text-primary">Bienvenue sur MedicalApp !</h3>
                  <form action="<?php echo base_url(); ?>appointement/next" method="post">
                  <label for="organizerSingle">Choisir le département</label>
                        <select class="form-select js-choice" id="organizerSingle" size="1" name="id" data-options='{"removeItemButton":true,"placeholder":true}'>
                        
                        <?php foreach ($departements as $departement): ?>
                            <option value="<?php echo $departement->id; ?>"><?php echo $departement->libDepartement; ?> </option>
                        <?php endforeach ?>
                        </select>
                        <input type="hidden" name="send" value="send">
                        <hr>
                    <button class="btn btn-primary me-1 mb-1" type="submit">Continuer</button>
                  </form>
                  <p class="lead">Vous êtes à un pas de votre rendez-vous 👨‍⚕️.</p>
                </div>
              </div>
            </div>
</div>