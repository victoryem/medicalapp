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
                  <h6>Clients<span class="badge badge-soft-success rounded-pill ms-2">10</span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning">Admins</div><a class="fw-semi-bold fs--1 text-nowrap" href="app/e-commerce/customers.html">Voir +<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-2.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h6>Clients<span class="badge badge-soft-success rounded-pill ms-2">100</span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info" >Médecins</div><a class="fw-semi-bold fs--1 text-nowrap" href="app/e-commerce/orders/order-list.html">Voir +<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-3.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h6>Client<span class="badge badge-soft-success rounded-pill ms-2">900</span></h6>
                  <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif">Secrétaires</div><a class="fw-semi-bold fs--1 text-nowrap" href="index.html">Voir +<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
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
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="pays">Pays</th>
                      <th class="sort pe-1 align-middle white-space-nowrap ps-5" data-sort="address" style="min-width: 200px;">Application</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="joined">Depuis</th>
                      <th class="align-middle no-sort"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-customers-body">
                    <tr class="btn-reveal-trigger">
                      
                      <td class="name align-middle white-space-nowrap py-2">
                          <div class="d-flex d-flex align-items-center">
                            <div class="flex-1">
                              <h5 class="mb-0 fs--1">Ricky Antony</h5>
                            </div>
                          </div>
                        </a></td>
                      <td class="email align-middle py-2"><a href="mailto:ricky@example.com">ricky@example.com</a></td>
                      <td class="phone align-middle white-space-nowrap py-2"><a href="tel:2012001851">(201) 200-1851</a></td>
                      <td class="pays align-middle white-space-nowrap py-2">Benin</td>
                      <td class="address align-middle white-space-nowrap ps-5 py-2">
                          <span class="badge badge rounded-pill badge-soft-success" data-bs-toggle="tooltip" data-bs-placement="top" title="RightQ"><img src="assets/img/rigthcom/rightQ-logo-1.png" alt="" width="70px" ></span>
                          <span class="badge badge rounded-pill badge-soft-secondary"><img src="assets/img/rigthcom/RightPlayer-Icon.svg" width="25px" alt=""></span>
                          <span class="badge badge rounded-pill badge-soft-warning"><img src="assets/img/rigthcom/RightSurvey-Icon.svg" alt="" width="25px"></span>
                        </td>
                      <td class="joined align-middle py-2">30/03/2018</td>
                      <td class="align-middle white-space-nowrap py-2 text-end">
                        <div class="dropdown font-sans-serif position-static">
                          <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-0">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                          </div>
                        </div>
                      </td>
                    </tr>
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
