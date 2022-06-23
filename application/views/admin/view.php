<div class="row">
            <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                  <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url(<?php echo base_url(); ?>/assets/img/generic/4.jpg);">
                    </div>
                    <!--/.bg-holder-->
                  </div>
                  <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img src="<?php echo base_url(); ?>/assets/img/team/2.jpg" width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" />      
                    </div>
 
                  </div>
                </div>
                <div class="card-body">
              <div class="row">
                <div class="col-lg-8">
                  <h4 class="mb-1"> <?php echo $user->nom ?> <?php echo $user->prenom ?>
                  <?php if($user->statut == 0): ?>
                                    <span class="badge bg-dark dark__bg-dark">Inactif</span>
                                  <?php endif; ?>
                                  <?php if($user->statut == 1 && $user->archive == 'no'): ?>
                                    <span class="badge bg-success">Actif</span>
                                  <?php endif; ?>
                                  <?php if($user->statut == 1 && $user->archive == 'yes'): ?>
                                    <span class="badge bg-warning">Archiver</span>
                    <?php endif; ?>
                  </h4>
                  <?php if($user->role == 'admin'): ?>
                    <td class="align-middle white-space-nowrap role "><h5 class="fs-0 fw-normal">Administrateur</h5></td>
                  <?php endif; ?>
                  <?php if($user->role == 'medecin'): ?>
                    <td class="align-middle white-space-nowrap role "><h5 class="fs-0 fw-normal">Médecin</h5></td>
                  <?php endif; ?>
                  <?php if($user->role == 'secretaire'): ?>
                      <td class="align-middle white-space-nowrap role "><h5 class="fs-0 fw-normal">Sécretaire</h5></td>
                  <?php endif; ?>
                  
                  <p class="text-500"><?php echo $user->adresse ?></p>
                  <?php if($user->statut == 1 && $user->archive == 'yes'): ?>
                      <button class="btn btn-danger me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>admin/dashboard/unarchive/<?php echo $user->id;  ?>" style = "color:white">Desarchiver cet utilisateur</a> </button>
                  <?php endif; ?>
                  <?php if($user->statut == 1 && $user->archive == 'no'): ?>
                      <button class="btn btn-warning me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>admin/dashboard/archiver/<?php echo $user->id;  ?>" style = "color:white">Archiver cet utilisateur</a> </button>
                  <?php endif; ?>
                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#adduser-modal">Modifier</button> 

                  <div class="border-dashed-bottom my-4 d-lg-none"></div>
                </div>
            </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="adduser-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Modifier <?php echo $user->nom ?> <?php echo $user->prenom ?> </h4>
        </div>
        <div class="p-4 pb-0">
        <form class="row g-3" method="post" action="<?php echo base_url(); ?>admin/dashboard/edit_user">
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">Nom</label>
                      <input class="form-control" id="first-name" type="text" value="<?php echo $user->nom; ?>" name="nom" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="last-name">Prénoms</label>
                      <input class="form-control" id="last-name" type="text"   value="<?php echo $user->prenom;  ?>"  name ="prenom" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email1">Email</label>
                      <input class="form-control" id="email1" type="email" value="<?php echo $user->email;  ?>" name = "email" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email2">Téléphone</label>
                      <input class="form-control" id="email2" type="text" value="<?php echo $user->phone;  ?>" name="phone"/>
                    </div>
                    <div class="col-lg-12">
                      <label class="form-label" for="email2">Adresse</label>
                      <input class="form-control" id="email2" type="text" value="<?php echo $user->adresse;  ?>" name="adresse"/>
                    </div>
                    <div class="col-lg-12">
                      <label class="form-label" for="email2">Departements</label>
                      <select class="form-select" name="idDep" id="form-wizard-gender"required="required">
                            <option value="2">Selectionner département ...</option>
                            <?php foreach ($deps as $dep): ?>
                              <option value="<?php echo $dep->idDep; ?>"><?php echo $dep->nomdep; ?></option>
                            <?php endforeach ?>
                    </div>
                    <input type="hidden" name="id" value ="<?php echo $user->id; ?>">
                    <hr>
                    <div class="col-lg-6">
                        <button class="btn btn-primary" type="submit" >Mettre à jour </button>
                    </div>
                  </form>             

        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
       
      </div>
    </div>
  </div>
</div>

         