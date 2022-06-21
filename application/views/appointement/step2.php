<div class="row mt-5 mt-lg-0 mt-xl-5 mt-xxl-0">

            <div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
              <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-capsules"></i></span>
                <div class="col">
                  <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Prise de rendez-vous.</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
                  <p class="mb-0">Remplir ces informations pour votre rendez-vous.</p>
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
                      <form   action="<?php echo base_url(); ?>appointement/add_app" method="POST">
                      <span class="badge bg-primary">Informations Personnels.</span>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-name">Nom*</label>
                          <input class="form-control" type="text" name="nom" placeholder="MAGENGO" id="form-wizard-wizard-name" required="required/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-name">Prénoms*</label>
                          <input class="form-control" type="text" name="prenom" placeholder="Guthembert" id="form-wizard-wizard-name" required="required />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-email">Email*</label>
                          <input class="form-control" type="email" name="email" placeholder="jesuis@malade.com" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="form-wizard-wizard-email" data-wizard-validate-email="true" />
                          <div class="invalid-feedback">Entrez votre email</div>
                        </div>
                        <div class="row g-2">
                          <div class="col-12">
                            <div class="mb-3">
                              <label class="form-label" for="form-wizard-wizard-password">Téléphone*</label>
                              <input class="form-control" type="text" name="phone" placeholder="61000000" required="required" id="form-wizard-wizard-password" data-wizard-validate-password="false" />
                              <div class="invalid-feedback">Entrer votre téléphone</div>
                            </div>
                          </div>
                        </div>
                        
                      <span class="badge bg-primary">Détails du rendez-vous.</span>
                      <div class="mb-3">
                          <label class="form-label" for="form-wizard-gender">Docteur</label>
                          <select class="form-select" name="docs" id="form-wizard-gender"required="required">
                            <option value="2">Selectionner votre médécin ...</option>
                            <?php foreach ($docs as $doc): ?>
                                <option value="<?php echo $doc->id; ?>"><?php echo $doc->nom; ?> <?php echo $doc->prenom; ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="">Date & Heure</label>
                          <input class="form-control datetimepicker" id="datetimepicker" type="text" placeholder="d/m/y H:i" data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true}' name="date" required="required"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-name">Adresse*</label>
                          <input class="form-control" type="text" name="adresse" placeholder="120 Rue des Cheminots, Jonquet" id="form-wizard-wizard-name" required="required "/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-address">Commentaire</label>
                          <textarea class="form-control" type ="text" rows="4" id="form-wizard-wizard-address" name ="commentaire" placeholder="Dites nous plus sur le but de consultation..."></textarea>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="terms" required="required" checked="checked" id="form-wizard-wizard-checkbox" />
                          <label class="form-check-label" for="form-wizard-wizard-checkbox">J'accepte <a href="#!">les termes </a>et <a href="#!">politique de confidentialitée</a></label>
                        </div>
                        <div class="mb-3">
                        <button class="btn btn-primary px-5 px-sm-6" type="submit">Plannifier ma consultation<span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span></button>
                        </div>
                      </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>