<div class="d-flex mb-4 mt-3"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-percentage"></i></span>
            <div class="col">
              <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Les utilisateurs</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
              <p class="mb-0">Retrouver ici  les statistiques des utilisateurs de MedicalApp</p>
            </div>
</div>

<div class="row g-3 mb-3">
            <div class="col-sm-6 col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h6>Nb:<span class="badge badge-soft-success rounded-pill ms-2"><?php echo $nb_admin ?></span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning">Admins</div><a class="fw-semi-bold fs--1 text-nowrap" href="<?php echo base_url(); ?>admin/dashboard/admins">Voir +<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-2.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h6>Nb:<span class="badge badge-soft-success rounded-pill ms-2"><?php echo $nb_doc ?></span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" >Médecins</div><a class="fw-semi-bold fs--1 text-nowrap" href="<?php echo base_url(); ?>admin/dashboard/doctors">Voir +<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-3.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h6>Nb:<span class="badge badge-soft-success rounded-pill ms-2"><?php echo $nb_sec ?></span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif">Secrétaires</div><a class="fw-semi-bold fs--1 text-nowrap" href="<?php echo base_url(); ?>admin/dashboard/secretaires">Voir +<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
              </div>
            </div>
</div>

<!--Tableau de clients-->
<div class="card mb-3" id="customersTable" data-list='{"valueNames":["name","email","phone","address","joined"],"page":10,"pagination":true}'>
            <div class="card-header">
              <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                  <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Clients</h5>
                </div>
              </div>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">
                  <thead class="bg-200 text-900">
                    <tr>
                      
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Nom</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="phone">Téléphone</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="role">Rôle</th>
                      <th class="sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address" style="min-width: 200px;">Adresse</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="statut">Statut</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-customers-body">
                  <?php foreach($users as $user) : ?>
                    <tr class="btn-reveal-trigger">
                      <td class="name align-middle white-space-nowrap py-2">
                          <div class="d-flex d-flex align-items-center">
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1"><?php echo $user->nom ?> <?php echo $user->prenom ?></h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:<?php echo $user->email ?>"><?php echo $user->email ?></a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href=""><?php echo $user->phone ?></a></td>
                      <td class="pays align-middle white-space-nowrap py-2"><?php echo $user->role ?></td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2"><?php echo $user->adresse ?></td>
                      <td class="joined align-middle py-2">
                                  <?php if($user->statut == 0): ?>
                                    <span class="badge bg-dark dark__bg-dark">Inactif</span>
                                  <?php endif; ?>
                                  <?php if($user->statut == 1 && $user->archive == 'no'): ?>
                                    <span class="badge bg-success">Actif</span>
                                  <?php endif; ?>
                                  <?php if($user->statut == 1 && $user->archive == 'yes'): ?>
                                    <span class="badge bg-warning">Archiver</span>
                                  <?php endif; ?>
                      </td>
                      
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center">
              <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="pagination mb-0"></ul>
              <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
</div>
<!-- Fin Tableau de clients-->
