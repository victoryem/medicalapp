<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                          <h2 class="mb-0">Overview-Medécins</h2>
                        </div>
                        <div class="card-body pt-2">
                          <div class="row g-0 h-100 align-items-center">
                            <div class="col">
                              <div class="d-flex align-items-center"><img class="me-3" src="assets/img/icons/weather-icon.png" alt="" height="60" />
                                <div>
                                  <div class="fs--2 fw-semi-bold">
                                  <button class="btn btn-outline-primary rounded-pill me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>admin/dashboard/add">Ajouter un medécin</a></button>
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
                            <h6 class="mb-0 text-nowrap py-2 py-xl-0">Les Medecins</h6>
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
                      <?php if(!empty($admins)): ?>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                          <table class="table fs--1 mb-0 overflow-hidden">
                            <thead class="bg-200 text-900">
                              <tr>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="nom">Nom & Prénoms</th>
                                <th class="pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="since">Depuis</th>
                                <th class="pe-card align-middle white-space-nowrap text-end">Actions</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach ($admins as $admin): ?>
                              <tr class="btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap nom">
                                  <a class="text-primary fw-semi-bold" href="#!"><?php echo $admin->nom ?> <?php echo $admin->prenom ?></a>
                                  <?php if($admin->statut == 0): ?>
                                    <span class="badge bg-dark dark__bg-dark">Inactif</span>
                                  <?php endif; ?>
                                  <?php if($admin->statut == 1 && $admin->archive == 'no'): ?>
                                    <span class="badge bg-success">Actif</span>
                                  <?php endif; ?>
                                  <?php if($admin->statut == 1 && $admin->archive == 'yes'): ?>
                                    <span class="badge bg-warning">Archiver</span>
                                  <?php endif; ?>
                              </td>
                                <td class="align-middle white-space-nowrap  email"><?php echo $admin->email ?></td>
                                <td class="align-middle white-space-nowrap since "><?php echo $admin->createDate ?></td>
                                <td class="text-end">
                                    <div>
                                        <button class="btn p-0" data-bs-toggle="modal" data-bs-target="#adduser-modal" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier"><span class="text-500 fas fa-edit"></span></button>
                                        <button class="btn p-0 ms-2" type="button"  data-bs-placement="top" title="Voir"><a href="<?php echo base_url(); ?>admin/dashboard/view/<?php echo $admin->id ?>"><span class="text-500 fas fa-eye"></span></a></button>
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
          <h4 class="mb-1" id="modalExampleDemoLabel">Modifier <?php echo $admin->nom ?> <?php echo $admin->prenom ?> </h4>
        </div>
        <div class="p-4 pb-0">
        <form class="row g-3" method="post" action="<?php echo base_url(); ?>admin/dashboard/edit_user">
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">Nom</label>
                      <input class="form-control" id="first-name" type="text" value="<?php echo $admin->nom; ?>" name="nom" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="last-name">Prénoms</label>
                      <input class="form-control" id="last-name" type="text"   value="<?php echo $admin->prenom;  ?>"  name ="prenom" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email1">Email</label>
                      <input class="form-control" id="email1" type="email" value="<?php echo $admin->email;  ?>" name = "email" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email2">Téléphone</label>
                      <input class="form-control" id="email2" type="text" value="<?php echo $admin->phone;  ?>" name="phone"/>
                    </div>
                    <div class="col-lg-12">
                      <label class="form-label" for="email2">Adresse</label>
                      <input class="form-control" id="email2" type="text" value="<?php echo $admin->adresse;  ?>" name="adresse"/>
                    </div>
                    <input type="hidden" name="id" value ="<?php echo $admin->id; ?>">
                    <div class="col-lg-6">
                        <button class="btn btn-primary" type="submit" >Mettre à jour </button>
                    </div>
                  </form>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
        <?php if($admin->statut == 1 && $admin->archive == 'yes'): ?>
            <button class="btn btn-danger me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>admin/dashboard/unarchive/<?php echo $admin->id;  ?>" style = "color:white">Desarchiver cet utilisateur</a> </button>
         <?php endif; ?>
         <?php if($admin->statut == 1 && $admin->archive == 'no'): ?>
            <button class="btn btn-danger me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>admin/dashboard/archiver/<?php echo $admin->id;  ?>" style = "color:white">Archiver cet utilisateur</a> </button>
         <?php endif; ?>
      </div>
    </div>
  </div>
</div>
                    <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Aucun medécin trouvé.</p>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>
                      



