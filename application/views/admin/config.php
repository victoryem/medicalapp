<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                          <h2 class="mb-0">Configrer votre cabinet</h2>
                        </div>
                        <div class="card-body pt-2">
                          <div class="row g-0 h-100 align-items-center">
                            <div class="col">
                              <div class="d-flex align-items-center"><img class="me-3" src="assets/img/icons/weather-icon.png" alt="" height="60" />
                                <div>
                                  <div class="fs--2 fw-semi-bold">
                                  <button class="btn btn-outline-primary rounded-pill me-1 mb-1" data-bs-toggle="modal" data-bs-target="#adduser-doc" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier">Mettre à jour vos infos</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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

                <?php if(empty($setting)): ?>
                <form class="row g-3" method="post" action="<?php echo base_url(); ?>admin/dashboard/add_config" enctype="multipart/form-data">

                    <div class="col-md-6">
                        <label class="form-label">Nom du cabinet</label>
                        <input class="form-control"  type="text" name="nom" />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Description du cabinet</label>
                        <input class="form-control"  type="text" name="description" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Adresse</label>
                        <input class="form-control"  type="text" name="adresse" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Téléphone 1</label>
                        <input class="form-control"  type="text" name="telephone1" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telephone 2</label>
                        <input class="form-control" type="text" name = "telephone2" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Ville</label>
                        <input class="form-control"  type="text" name="ville" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Pays</label>
                        <input class="form-control"  type="text" name="pays" />
                    </div>
                    <div class="col-md-6">
                    <label class="form-label">Logo</label>
                    <input class="form-control form-control-sm" id="customFileSm" type="file" name="file" />
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                </form>
                <?php else: ?>
                    <form class="row g-3" method="post" action="<?php echo base_url(); ?>Register/validation">

                        <div class="col-md-6">
                            <label class="form-label">Nom du cabinet</label>
                            <input class="form-control"  type="text" name="nom" value="<?php echo $setting->nom;  ?>" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Description du cabinet</label>
                            <input class="form-control"  type="text" name="description" value="<?php echo $setting->description;  ?>" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Adresse</label>
                            <input class="form-control"  type="text" name="adresse" value="<?php echo $setting->adresse;  ?>" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Téléphone 1</label>
                            <input class="form-control"  type="text" name="telephone1"  value="<?php echo $setting->telephone1;  ?>"/>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Telephone 2</label>
                            <input class="form-control" type="text" name = "telephone2" value="<?php echo $setting->telephone2;  ?>"/>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Ville</label>
                            <input class="form-control"  type="text" name="ville" value="<?php echo $setting->ville;  ?>"/>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Pays</label>
                            <input class="form-control"  type="text" name="pays" value="<?php echo $setting->pays;  ?>"/>
                        </div>
                        <div class="col-md-6">
                        <label class="form-label">Logo</label>
                        <input class="form-control form-control-sm" id="customFileSm" type="file" name="file" diseable/>
                        </div>
                        <div class="col-12">
                        </div>
                        </form>
                <?php endif; ?>


                <div class="modal fade" id="adduser-doc" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Infos cabinet </h4>
        </div>
        <div class="p-4 pb-0">
        <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-0">Modifier les informations de votre cabinet</h5>
            </div>
            <div class="card-body bg-light">
              <form class="" action="<?php echo base_url(); ?>medecins/dashboard/add_doc" method="post" enctype="multipart/form-data">
              <div class="col-md-12">
                            <label class="form-label">Nom du cabinet</label>
                            <input class="form-control"  type="text" name="nom" value="<?php echo $setting->nom;  ?>" />
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Description du cabinet</label>
                            <input class="form-control"  type="text" name="description" value="<?php echo $setting->description;  ?>" />
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Adresse</label>
                            <input class="form-control"  type="text" name="adresse" value="<?php echo $setting->adresse;  ?>" />
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Téléphone 1</label>
                            <input class="form-control"  type="text" name="telephone1"  value="<?php echo $setting->telephone1;  ?>"/>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Telephone 2</label>
                            <input class="form-control" type="text" name = "telephone2" value="<?php echo $setting->telephone2;  ?>"/>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Ville</label>
                            <input class="form-control"  type="text" name="ville" value="<?php echo $setting->ville;  ?>"/>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Pays</label>
                            <input class="form-control"  type="text" name="pays" value="<?php echo $setting->pays;  ?>"/>
                        </div>
                        <div class="col-md-12">
                        <label class="form-label">Logo</label>
                        <input class="form-control form-control-sm" id="customFileSm" type="file" name="file" diseable/>
                        </div>
                  <hr>
                  <div class="col-lg-6">
                        <button class="btn btn-primary" type="submit" >Ajouter </button>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
  </div>
