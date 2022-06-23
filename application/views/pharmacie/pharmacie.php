<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                          <h2 class="mb-0">Pharmacie</h2>
                        </div>
                        <div class="card-body pt-2">
                          <div class="row g-0 h-100 align-items-center">
                            <div class="col-12">
                              <div class="d-flex align-items-center"><img class="me-3" src="<?php echo base_url(); ?>assets/img/icons/weather-icon.png" alt="" height="60" />
                                <div>
                                  <div class="fs--2 fw-semi-bold">
                                  
                                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#error-modal">Nouveau médicament</button> 
                                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add_form">Nouvelle forme</button>
                                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add_cat">Nouvelle catégorie</button>
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
                            <h6 class="mb-0 text-nowrap py-2 py-xl-0">Médicament </h6>
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
                      <?php if(!empty($medicaments)): ?>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                          <table class="table fs--1 mb-0 overflow-hidden">
                            <thead class="bg-200 text-900">
                              <tr>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="nom">Nom</th>
                                <th class="pe-1 align-middle white-space-nowrap" data-sort="categorie">Catégorie</th>
                                <th class="pe-1 align-middle white-space-nowrap" data-sort="forme">Forme</th>
                                <th class="pe-card align-middle white-space-nowrap text-end">Actions</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach ($medicaments as $medicament): ?>
                              <tr class="btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap nom">
                                  <a class="text-primary fw-semi-bold" href="#!"><?php echo $medicament->nom ?> </a>
                              </td>
                                <td class="align-middle white-space-nowrap  categorie"><?php echo $medicament->libCategorie  ?></td>
                                <td class="align-middle white-space-nowrap  forme"><?php echo $medicament->libForme  ?></td>
                                <td class="text-end">
                                    <div>
                                        <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#see_medic" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir"><span class="text-500 fas fa-edit"></span></button>
                                      </div>
                                </td>
                              </tr>
                              <?php endforeach ?>
                            </tbody>
                          </table>
                        </div>
                        <div class="text-center d-none" id="pages-table-fallback">
                          <p class="fw-bold fs-1 mt-3">Aucun médicament dans votre Pharmacie.</p>
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

              

              <!---
                Modal pour voir un médicament
            -->
<div class="modal fade" id="see_medic" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Modifier <?php echo $medicament->nom ?> </h4>
        </div>
        <div class="p-4 pb-0">
        <form action ="#" method="">
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Nom du médicament</label>
              <input class="form-control" id="recipient-name" type="text" name ="libDepartement" value ="<?php echo $medicament->nom  ?>" deseable/>
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Forme</label>
              <input class="form-control" id="recipient-name" type="text" name ="libDepartement" value ="<?php echo $medicament->libForme  ?>" deseable/>
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Catégorie</label>
              <input class="form-control" id="recipient-name" type="text" name ="libDepartement" value ="<?php echo $medicament->libCategorie  ?>" deseable/>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
        
            <button class="btn btn-danger me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>pharmacie/del/<?php echo $medicament->id;  ?>" style = "color:white">Supprimer</a> </button>
         
      </div>
    </div>
  </div>
</div>
                    <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Aucun médicament trouvé.</p>
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
          <h4 class="mb-1" id="modalExampleDemoLabel">Ajouter un nouveau médicament </h4>
        </div>
        <div class="p-4 pb-0">
          <form action ="<?php echo base_url(); ?>pharmacie/add_medicament" method="post">
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Nom du médicament</label>
              <input class="form-control" id="recipient-name" type="text" name ="nom"/>
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Catégorie</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="idCat">
              <option selected="">Sélectionner</option>
              <?php foreach ($categories as $categorie): ?>
                <option value="<?php echo $categorie->id; ?>"><?php echo $categorie->libCategorie; ?></option>
                <?php endforeach ?>
             </select>
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Forme</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="idForm">
              <option selected="">Sélectionner</option>
              <?php foreach ($formes as $forme): ?>
                <option value="<?php echo $forme->id; ?>"><?php echo $forme->libForme; ?></option>
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




 <!---
                Modal pour Ajouter une forme de médicament
            -->

<div class="modal fade" id="add_form" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Ajouter une forme de médicament </h4>
        </div>
        <div class="p-4 pb-0">
          <form action ="<?php echo base_url(); ?>pharmacie/add_form" method="post">
            <div class="mb-12">
              <label class="col-form-label" for="recipient-name">Libellé de la forme</label>
              <input class="form-control" id="recipient-name" type="text" name ="libForme"/>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Ajouter </button>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
                      



<!---
                Modal pour Ajouter une catégotie de médicament
            -->

            <div class="modal fade" id="add_cat" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Ajouter une nouvelle Catégorie </h4>
        </div>
        <div class="p-4 pb-0">
          <form action ="<?php echo base_url(); ?>pharmacie/add_cat" method="post">
            <div class="mb-12">
              <label class="col-form-label" for="recipient-name">Libellé de la Catégorie</label>
              <input class="form-control" id="recipient-name" type="text" name ="libCategorie"/>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Ajouter </button>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>



                <div class="col-lg-12 col-xxl-12">
                    <div class="card" id="table" data-list='{"valueNames":["nom","role"],"page":6,"pagination":true,"fallback":"pages-table-fallback"}'>
                      <div class="card-header">
                        <div class="row flex-between-center">
                          <div class="col-auto col-sm-6 col-lg-7">
                            <h6 class="mb-0 text-nowrap py-2 py-xl-0">Forme de médicaments </h6>
                          </div>
                        </div>
                      </div>
                      <?php if(!empty($formes)): ?>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                          <table class="table fs--1 mb-0 overflow-hidden">
                            <thead class="bg-200 text-900">
                              <tr>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach ($formes as $forme): ?>
                              <tr class="btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap nom">
                                  <a class="text-primary fw-semi-bold" href="#!"><?php echo $forme->libForme ?> </a>
                              </td>
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
                          <p class="fw-bold fs-1 mt-3">Aucune forme de médicaments dans votre Pharmacie.</p>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>


<hr>
                <div class="col-lg-12 col-xxl-12">
                    <div class="card" id="table" data-list='{"valueNames":["nom","role"],"page":6,"pagination":true,"fallback":"pages-table-fallback"}'>
                      <div class="card-header">
                        <div class="row flex-between-center">
                          <div class="col-auto col-sm-6 col-lg-7">
                            <h6 class="mb-0 text-nowrap py-2 py-xl-0">Catégories de médicaments </h6>
                          </div>
                        </div>
                      </div>
                      <?php if(!empty($categories)): ?>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                          <table class="table fs--1 mb-0 overflow-hidden">
                            <thead class="bg-200 text-900">
                              <tr>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach ($categories as $categorie): ?>
                              <tr class="btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap nom">
                                  <a class="text-primary fw-semi-bold" href="#!"><?php echo $categorie->libCategorie ?> </a>
                              </td>
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
                          <p class="fw-bold fs-1 mt-3">Aucune catégorie de médicaments dans votre Pharmacie.</p>
                      </div>
                        </div>
                        </div>
                    <?php endif; ?>
                      



