<div class="row mt-5 mt-lg-0 mt-xl-5 mt-xxl-0">

            <div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
              <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-capsules"></i></span>
                <div class="col">
                  <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Prise de rendez-vous.</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
                  <p class="mb-0">Remplir ces informations pour ajouter de rendez-vous.</p>
                  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#error-modal"> Pour un patient existant </button>
                </div>
              </div>
              <div class="card theme-wizard mb-5">
                <div class="card-header bg-light pt-3 pb-2">
                  <ul class="nav nav-pills mb-6" role="tablist" id="pill-tab1">
                    <li class="nav-item" role="presentation">
                    </li>
                  </ul>
                </div>
                <div class="card-body py-4">
                  <div class="tab-content">
                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="form-wizard-tab1" id="form-wizard-tab1">
                      <form   action="<?php echo base_url(); ?>secretaires/dashboard/add_app" method="POST">
                      <span class="badge bg-primary">Informations du Patients.</span>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-name">Nom*</label>
                          <input class="form-control" type="text" name="nom" placeholder="MAGENGO" id="form-wizard-wizard-name" required="required"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-name">Prénoms*</label>
                          <input class="form-control" type="text" name="prenom" placeholder="Guthembert" id="form-wizard-wizard-name" required="required" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-email">Email*</label>
                          <input class="form-control" type="email" name="email" placeholder="jesuis@malade.com" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$"  id="form-wizard-wizard-email" data-wizard-validate-email="true" />
                          <div class="invalid-feedback">Entrez son email</div>
                        </div>
                        <div class="row g-2">
                          <div class="col-12">
                            <div class="mb-3">
                              <label class="form-label" for="form-wizard-wizard-password">Téléphone*</label>
                              <input class="form-control" type="text" name="phone" placeholder="61000000" id="form-wizard-wizard-password" data-wizard-validate-password="false" />
                              <div class="invalid-feedback">Entrer son téléphone</div>
                            </div>
                          </div>
                        </div>
                        
                      <span class="badge bg-primary">Détails du rendez-vous.</span>
                      <div class="mb-3">
                          <label class="form-label" for="form-wizard-gender">Docteur</label>
                          <select class="form-select" name="docs" id="form-wizard-gender"required="required">
                            <option value="2">Selectionner le médécin ...</option>
                            <?php foreach ($medecins as $medecin): ?>
                                <option value="<?php echo $medecin->id; ?>"><?php echo $medecin->nom; ?> <?php echo $medecin->prenom; ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="">Date & Heure</label>
                          <input class="form-control datetimepicker" id="datetimepicker" type="text" placeholder="d/m/y H:i" data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true}' name="date" required="required"/>
                        </div>
                       
                        <div class="mb-3">
                        <button class="btn btn-primary px-5 px-sm-6" type="submit">Plannifier la consultation<span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span></button>
                        </div>
                      </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


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
          <h4 class="mb-1" id="modalExampleDemoLabel">Ajouter un nouveau rendez-vous </h4>
        </div>
        <div class="p-4 pb-0">
          <form action ="<?php echo base_url(); ?>secretaire/dashboard/addnewapp" method="post">
            
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Patient</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="idPatient">
              <option selected="">Sélectionner</option>
              <?php foreach ($patients as $patient): ?>
                <option value="<?php echo $patient->id; ?>"><?php echo $patient->nom; ?> <?php echo $patient->prenom; ?></option>
                <?php endforeach ?>
             </select>
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Médecins</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="doc">
              <option selected="">Sélectionner</option>
              <?php foreach ($medecins as $medecin): ?>
                <option value="<?php echo $medecin->id; ?>"><?php echo $medecin->nom; ?> <?php echo $medecin->prenom; ?></option>
                <?php endforeach ?>
             </select>
            </div>
            <div class="mb-3">
                          <label class="form-label" for="">Date & Heure</label>
                          <input class="form-control datetimepicker" id="datetimepicker" type="text" placeholder="d/m/y H:i" data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true}' name="date" required="required"/>
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
