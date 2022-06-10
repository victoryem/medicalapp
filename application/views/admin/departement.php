<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                          <h2 class="mb-0">Overview-Departement</h2>
                        </div>
                        <div class="card-body pt-2">
                          <div class="row g-0 h-100 align-items-center">
                            <div class="col">
                              <div class="d-flex align-items-center"><img class="me-3" src="assets/img/icons/weather-icon.png" alt="" height="60" />
                                <div>
                                  <div class="fs--2 fw-semi-bold">
                                  
                                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#error-modal">Nouveau Département</button>
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
                <div class="col-lg-12 col-xxl-12">
                    <div class="card" id="table" data-list='{"valueNames":["nom","role"],"page":6,"pagination":true,"fallback":"pages-table-fallback"}'>
                      <div class="card-header">
                        <div class="row flex-between-center">
                          <div class="col-auto col-sm-6 col-lg-7">
                            <h6 class="mb-0 text-nowrap py-2 py-xl-0">Départements </h6>
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
                      <?php if(!empty($departements)): ?>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                          <table class="table fs--1 mb-0 overflow-hidden">
                            <thead class="bg-200 text-900">
                              <tr>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="nom">Nom du département</th>
                                <th class="pe-1 align-middle white-space-nowrap" data-sort="chef">Spécialiste</th>
                                <th class="pe-card align-middle white-space-nowrap text-end">Actions</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach ($departements as $departement): ?>
                              <tr class="btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap nom">
                                  <a class="text-primary fw-semi-bold" href="#!"><?php echo $departement->nomdep ?> </a>
                              </td>
                                <td class="align-middle white-space-nowrap  email"><?php echo $departement->nom  ?> <?php echo $departement->prenom  ?></td>
                                <td class="text-end">
                                    <div>
                                        <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#adduser-modal" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier"><span class="text-500 fas fa-edit"></span></button>
                                      </div>
                                </td>
                              </tr>
                              <?php endforeach ?>
                            </tbody>
                          </table>
                        </div>
                        <div class="text-center d-none" id="pages-table-fallback">
                          <p class="fw-bold fs-1 mt-3">Aucun utilisateur trouvé.</p>
                        </div>
                      </div>

                      <div class="card-footer">
                        <div class="row align-items-center">
                          <div class="pagination d-none"></div>
                          <div class="col">
                            <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
                          </div>
                          <div class="col-auto d-flex">
                            <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Precedent</span></button>
                            <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Suivant</span></button>
                          </div>
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
          <h4 class="mb-1" id="modalExampleDemoLabel">Modifier <?php echo $departement->nomdep ?> </h4>
        </div>
        <div class="p-4 pb-0">
        <form action ="<?php echo base_url(); ?>admin/departement/add_dep" method="post">
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Nom du département</label>
              <input class="form-control" id="recipient-name" type="text" name ="libDepartement" value ="<?php echo $departement->nomdep ?>"/>
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Médecin Spécialiste:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="chefDepartement">
              <option selected=""><?php echo $departement->nom  ?> <?php echo $departement->prenom  ?></option>
              <?php foreach ($docs as $doc): ?>
                <option value="<?php echo $doc->id; ?>"><?php echo $doc->nom; ?> <?php echo $doc->prenom; ?></option>
                <?php endforeach ?>
             </select>
             <input type="hidden" name="id" value="">
            </div>
            <button class="btn btn-primary" type="submit">Modifier </button>
          </form>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
        
            <button class="btn btn-danger me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>departement/dashboard/unarchive/<?php echo $departement->idDep;  ?>" style = "color:white">Supprimer</a> </button>
         
      </div>
    </div>
  </div>
</div>
                    <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Aucun departement trouvé.</p>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>

<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Ajouter un nouveau departement </h4>
        </div>
        <div class="p-4 pb-0">
          <form action ="<?php echo base_url(); ?>admin/departement/add_dep" method="post">
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Nom du département</label>
              <input class="form-control" id="recipient-name" type="text" name ="libDepartement"/>
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Médecin Spécialiste:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="chefDepartement">
              <option selected="">Sélectionner</option>
              <?php foreach ($docs as $doc): ?>
                <option value="<?php echo $doc->id; ?>"><?php echo $doc->nom; ?> <?php echo $doc->prenom; ?></option>
                <?php endforeach ?>
             </select>
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
</div>
                      



