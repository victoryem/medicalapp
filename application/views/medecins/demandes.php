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
                                <th class="pe-1 align-middle white-space-nowrap" data-sort="chef">Date & Heure</th>
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
                                        <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#adduser-modal" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirmer"><span class="text-500 fas fa-edit"></span></button>
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
              
                    <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Aucune demande non traité.</p>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>


                      



