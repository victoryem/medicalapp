<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                          <h2 class="mb-0">Vos nouvelles demandes</h2>
                        </div>
                        <div class="card-body pt-2">
                          <div class="row g-0 h-100 align-items-center">
                            <div class="col">
                              <div class="d-flex align-items-center"><img class="me-3" src="<?php echo base_url(); ?>assets/img/icons/weather-icon.png" alt="" height="60" />

                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-xxl-12">
                    <div class="card" id="table" data-list='{"valueNames":["nom","role"],"page":6,"pagination":true,"fallback":"pages-table-fallback"}'>
                      <div class="card-header">
                        <div class="row flex-between-center">
                          <div class="col-auto col-sm-6 col-lg-7">
                            <h6 class="mb-0 text-nowrap py-2 py-xl-0"> </h6>
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
                          </div>
                          <div class="col-auto col-sm-6 col-lg-5">
                            <div>
                              <form>
                                <div class="input-group">
                                  <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Rechercher" aria-label="search" />
                                  <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span></div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php if(!empty($demandes)): ?>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                          <table class="table fs--1 mb-0 overflow-hidden">
                            <thead class="bg-200 text-900">
                              <tr>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="nom">Nom & prenoms</th>
                                <th class="pe-1 align-middle white-space-nowrap" data-sort="date">Date & Heure</th>
                                <th class="pe-1 align-middle white-space-nowrap" data-sort="chef">Commentaire</th>
                                <th class="pe-card align-middle white-space-nowrap text-end">Actions</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach ($demandes as $demande): ?>
                              <tr class="btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap nom">
                                  <a class="text-primary fw-semi-bold" href="#!"><?php echo $demande->nom ?> <?php echo $demande->prenom  ?> </a>
                              </td>
                                <td class="align-middle white-space-nowrap  email"><?php echo $demande->date  ?></td>
                                <td class="align-middle white-space-nowrap  email"><?php echo $demande->comment  ?></td>
                                <td class="text-end">
                                    <div>
                                        <button class="btn p-0"  type="button"  data-bs-placement="top" title="Confirmer"> <a href="<?php echo base_url(); ?>secretaires/dashboard/confirmer/<?php echo $demande->id ?>"><span class="text-500 far fa-thumbs-up"></span></a></button>
                                        <button class="btn p-0 ms-2" data-bs-toggle="modal" data-bs-target="#cancel" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Annuler"><span class="text-500 far fa-thumbs-down"></span></button>

                                      </div>
                                </td>
                              </tr>
                              <?php endforeach ?>
                            </tbody>
                          </table>
                        </div>
                        
                      </div>
                    </div>
                  </div> 
              </div>
              <div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Voulez-vous vraiment rejeter cette demande ? </h4>
        </div>
        <div class="p-4 pb-0">
        <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><a href="<?php echo base_url(); ?>secretaires/dashboard/cancel/<?php echo $demande->id ?>" style="color:white">Oui, Annuler cette demande</a></button>
       
      </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Non, Fermer</button>
      </div>
    </div>
  </div>
</div>
              
                    <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Rien à afficher.</p>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>


                      



