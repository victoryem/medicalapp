<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                          <h2 class="mb-0">Vos Patients</h2>
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
                            <h6 class="mb-0 text-nowrap py-2 py-xl-0"></h6>
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
                      <?php if(!empty($patients)): ?>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                          <table class="table fs--1 mb-0 overflow-hidden">
                            <thead class="bg-200 text-900">
                              <tr>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="nom">Nom & Prénoms</th>
                                <th class="pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="phone">Téléphone</th>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="adresse">Adresse</th>
                                <th class="pe-card align-middle white-space-nowrap text-end">Actions</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach ($patients as $patient): ?>
                              <tr class="btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap nom prenom">
                                  <a class="text-primary fw-semi-bold" href="#!"><?php echo $patient->nom ?> <?php echo $patient->prenom ?></a>
                              </td>
                                <td class="align-middle white-space-nowrap  email"><?php echo $patient->email ?></td>
                                <td class="align-middle white-space-nowrap phone "><?php echo $patient->phone ?></td>
                                <td class="align-middle white-space-nowrap phone "><?php echo $patient->adresse ?></td>
                                <td class="text-end">
                                    <div>
                                        <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#adduser-modal" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier"><span class="text-500 fas fa-edit"></span></button>
                                        <button class="btn p-0 ms-2" type="button"  data-bs-placement="top" title="Voir"><a href="<?php echo base_url(); ?>medecins/dashboard/patient/<?php echo $patient->id ?>"><span class="text-500 fas fa-eye"></span></a></button>
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
          <h4 class="mb-1" id="modalExampleDemoLabel">Modifier <?php echo $patient->nom ?> <?php echo $patient->prenom ?> </h4>
        </div>
        <div class="p-4 pb-0">
        <form class="row g-3" method="post" action="<?php echo base_url(); ?>patient/dashboard/edit_user">
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">Nom</label>
                      <input class="form-control" id="first-name" type="text" value="<?php echo $patient->nom; ?>" name="nom" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="last-name">Prénoms</label>
                      <input class="form-control" id="last-name" type="text"   value="<?php echo $patient->prenom;  ?>"  name ="prenom" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email1">Email</label>
                      <input class="form-control" id="email1" type="email" value="<?php echo $patient->email;  ?>" name = "email" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email2">Téléphone</label>
                      <input class="form-control" id="email2" type="text" value="<?php echo $patient->phone;  ?>" name="phone"/>
                    </div>
                    <div class="col-lg-12">
                      <label class="form-label" for="email2">Adresse</label>
                      <input class="form-control" id="email2" type="text" value="<?php echo $patient->adresse;  ?>" name="adresse"/>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">Poids</label>
                      <input class="form-control" id="first-name" type="text" value="" name="poids" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">Sexe</label>
                      <select class="form-select js-choice" id="organizerSingle" size="1" name="sexe" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="M">Masculin </option>
                            <option value="F">Feminin </option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">Taille</label>
                      <input class="form-control" id="first-name" type="text" value="" name="taille"  placeholder="ex: 10kg"/>
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">Année de naissance</label>
                      <?php $years = range(1900, date("Y")); ?>
                      <select class="form-select js-choice" id="organizerSingle" size="1" name="date_de_naissance" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <?php foreach($years as $year) : ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="hidden" name="id" value ="<?php echo $patient->id; ?>">
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
                    <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Aucun patient trouvé.</p>
                        </div>
                      </div>
                      </div>
                      
                    <?php endif; ?>
                      



