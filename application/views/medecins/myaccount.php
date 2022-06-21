<div class="row">
            <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                  <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url(../../assets/img/generic/4.jpg);">
                    </div>
                    <!--/.bg-holder-->

                    <input class="d-none" id="upload-cover-image" type="file" />
                    <label class="cover-image-file-input" for="upload-cover-image"><span class="fas fa-camera me-2"></span><span>Change cover photo</span></label>
                  </div>
                  <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img src="../../assets/img/team/2.jpg" width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" />
                      <input class="d-none" id="profile-image" type="file" />
                      <label class="mb-0 overlay-icon d-flex flex-center" for="profile-image"><span class="bg-holder overlay overlay-0"></span><span class="z-index-1 text-white dark__text-white text-center fs--1"><span class="fas fa-camera"></span><span class="d-block">Update</span></span></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-8 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Réglages du profil</h5>
                </div>
                <div class="card-body bg-light">
                  <form class="row g-3">
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">Nom</label>
                      <input class="form-control" id="first-name" type="text" value="<?php echo $user->nom; ?>" name="nom" disabled/>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="last-name">Prénoms</label>
                      <input class="form-control" id="last-name" type="text"   value="<?php echo $user->prenom;  ?>"  name ="prenom" disabled/>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email1">Email</label>
                      <input class="form-control" id="email1" type="text" value="<?php echo $user->email;  ?>" name = "email" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email2">Téléphone</label>
                      <input class="form-control" id="email2" type="text" value="<?php echo $user->phone;  ?>" name="phone"/>
                    </div>
                    <div class="col-lg-12">
                      <label class="form-label" for="email2">Adresse</label>
                      <input class="form-control" id="email2" type="text" value="<?php echo $user->adresse;  ?>" name="adresse"/>
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                      <button class="btn btn-primary" type="submit">Mettre à jour </button>
                    </div>
                  </form>
                </div>
              </div>
             
            </div>
            <div class="col-lg-4 ps-lg-2">
              <div class="sticky-sidebar">
                
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="mb-0">Modifier le mot de passe</h5>
                  </div>
                  <div class="card-body bg-light">
                    <form method= "post" action ="<?php echo base_url(); ?>admin/dashboard/change_password">
                      <div class="mb-3">
                        <label class="form-label" for="old-password">Ancien mot de passe</label>
                        <input class="form-control" id="old-password" type="password" name="old_password" require/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="new-password">Nouveau mot de passe</label>
                        <input class="form-control" id="new-password" type="password" name="new-password" require/>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="confirm-password">Confirmer le mot de passe</label>
                        <input class="form-control" id="confirm-password" type="password" name="confirm-password" require/>
                        <span class="text-danger"><?php echo form_error('confirm-password'); ?></span>
                      </div>
                      <button class="btn btn-primary d-block w-100" type="submit">Mettre à jour le mot de passe </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <hr>
          <hr>
          <?php if($this->session->userdata('role')== 'medecin') : ?>
            <div class="col-lg-6 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Enregistrer votre signature.</h5>
                </div>
                <div class="card-body bg-light">
                  <form class="row g-3" action ="<?php echo base_url(); ?>medecins/dashboard/add_sign" method="post" enctype="multipart/form-data">
                    <div class="col-lg-12">
                      <label class="form-label" for="first-name">Signature</label>
                      <input class="form-control" id="customFile" type="file" name ="file"/>
                    </div>
                    

                    <div class="col-12 d-flex justify-content-end">
                      <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                  </form>
                </div>
              </div>
             
            </div>
            <div class="col-lg-6 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Enregistrer votre cachet.</h5>
                </div>
                <div class="card-body bg-light">
                  <form class="row g-3"  action ="<?php echo base_url(); ?>medecins/dashboard/add_cachet" method="post" enctype="multipart/form-data">
                    <div class="col-lg-12">
                      <label class="form-label" for="last-name">Cachet</label>
                      <input class="form-control" id="customFile" type="file" name ="file"/> 
                    </div>
                    

                    <div class="col-12 d-flex justify-content-end">
                      <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                  </form>
                </div>
              </div>
             
            </div>
           
            <?php endif; ?>
            </div>