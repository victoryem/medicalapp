<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                          <h2 class="mb-0">Gérer votre disponibilité</h2>
                        </div>
                        <div class="card-body pt-2">
                          <div class="row g-0 h-100 align-items-center">
                            <div class="col">
                              <div class="d-flex align-items-center"><img class="me-3" src="<?php echo base_url(); ?>assets/img/icons/weather-icon.png" alt="" height="60" />

                              </div>
                              <div class="fs--2 fw-semi-bold">
                                  
                                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#error-modal">Ajouter disponibilité</button> 
                                  </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
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
                <div class="col-lg-12 col-xxl-12">
                    <div class="card" >
                      <div class="card-header">
                        <div class="row flex-between-center">
                          <div class="col-auto col-sm-6 col-lg-7">
                            <h6 class="mb-0 text-nowrap py-2 py-xl-0">Disponibilité de la semaine </h6>
                          </div>
                        </div>
                      </div>
                      <?php if(!empty($dispos)): ?>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                          <table class="table fs--1 mb-0 overflow-hidden">
                            <thead class="bg-200 text-900">
                              <tr>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach ($dispos as $dispo): ?>
                              <tr class="btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap nom">
                                  <a class="text-primary fw-semi-bold" href="#!"> <?php echo $dispo->date ?></a>
                              </td>
                              <td class="align-middle white-space-nowrap "><?php echo $dispo->heureDebut ?></td>
                              <td class="align-middle white-space-nowrap "> <?php echo $dispo->heureFin ?></td>

                              </tr>
                              <?php endforeach ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
                    <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Vous n'avez definie aucune disponibilité pour cette semaine.</p>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>
                     <!---
                Modal pour Ajouter un médicament
            -->
            <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Ajouter une disponibilité </h4>
        </div>
        <div class="p-4 pb-0">
          <form action ="<?php echo base_url(); ?>medecins/dashboard/add_dispo" method="post">
            <div class="mb-3">
            <label class="form-label" for="datepicker">Date</label>
            <input class="form-control" name="date" type="date" placeholder="d/m/y" />
            </div>
            <div class="mb-3">
            <label class="form-label" for="timepicker1">Heure de début</label>
            <input class="form-control" name="heureDebut" type="time" placeholder="H:i" />
            </div>
            <div class="mb-3">
            <label class="form-label" for="timepicker1">Heure de Fin</label>
            <input class="form-control" name="heureFin" type="time" placeholder="H:i" />
            </div>
            <button class="btn btn-primary" type="submit">Enregistrer </button>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div