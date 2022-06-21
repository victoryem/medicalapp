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
                    <div class="card" id="table" data-list='{"valueNames":["nom","email", "adresse"],"page":6,"pagination":true,"fallback":"pages-table-fallback"}'>
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
                                <th class="pe-card align-middle white-space-nowrap text-end" data-sort="adresse">Adresse</th>
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
                                <td class="text-end"><?php echo $patient->adresse ?></td>
                              </tr>
                              <?php endforeach ?>
                            </tbody>
                          </table>
                        </div>
                        <div class="text-center d-none" id="pages-table-fallback">
                          <p class="fw-bold fs-1 mt-3">Aucun patient trouvé.</p>
                        </div>
                      </div>

                      <div class="card-footer">
                        <div class="row align-items-center">
                          <div class="pagination d-none"></div>
                          <div class="col">
                            <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
                          </div>

                        </div>
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
                      



