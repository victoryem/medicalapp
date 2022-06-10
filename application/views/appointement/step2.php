<div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
              <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-capsules"></i></span>
                <div class="col">
                  <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Prise de rendez-vous.</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
                  <p class="mb-0">Remplisser ces informations pour votre rendez-vous.</p>
                </div>
              </div>
              <div class="card theme-wizard mb-5">
                <div class="card-header bg-light pt-3 pb-2">
                  <ul class="nav nav-pills mb-3" role="tablist" id="pill-tab1">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#form-wizard-tab1" type="button" role="tab" aria-controls="form-wizard-tab1" aria-selected="true"><span class="fas fa-user me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Informations Personnels</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#form-wizard-tab2" type="button" role="tab" aria-controls="form-wizard-tab2" aria-selected="false"><span class="fas fa-lock me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Détails du rendez-vous</span></button>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-wizard-step="data-wizard-step" data-bs-toggle="pill" data-bs-target="#form-wizard-tab4" type="button" role="tab" aria-controls="form-wizard-tab4" aria-selected="false"><span class="fas fa-thumbs-up me-2" data-fa-transform="shrink-2"></span><span class="d-none d-md-inline-block fs--1">Terminer</span></button>
                    </li>
                  </ul>
                </div>
                <div class="card-body py-4">
                  <div class="tab-content">
                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="form-wizard-tab1" id="form-wizard-tab1">
                      <form novalidate="novalidate">
                        
                        <div class="row g-2">
                          <div class="col-6">
                            <div class="mb-3">
                              <label class="form-label" for="form-wizard-wizard-password">Nom*</label>
                              <input class="form-control" type="text" name="nom" placeholder="Votre Nom" required="required"  />
                              <div class="invalid-feedback">Entrer votre nom</div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="mb-3">
                              <label class="form-label" for="form-wizard-wizard-confirm-password">Prénoms*</label>
                              <input class="form-control" type="text" name="confirmPassword" placeholder="Votre Prénom" required="required" />
                              <div class="invalid-feedback">Entrer votre prénom</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-2">
                          <div class="col-6">
                            <div class="mb-3">
                              <label class="form-label" for="form-wizard-wizard-password">Email*</label>
                              <input class="form-control" type="email" name="email" placeholder="Votre Email" required="required"  />
                              <div class="invalid-feedback">Entrer votre email</div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="mb-3">
                              <label class="form-label" for="form-wizard-wizard-confirm-password">Téléphone*</label>
                              <input class="form-control" type="text" name="phone" placeholder="Votre Téléphone" required="required" />
                              <div class="invalid-feedback">Entrer votre téléphone</div>
                            </div>
                          </div>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="terms" required="required" checked="checked" id="form-wizard-wizard-checkbox" />
                          <label class="form-check-label" for="form-wizard-wizard-checkbox">J'accepte <a href="#!">les termes </a>et <a href="#!">politique de confidentialitée</a></label>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="form-wizard-tab2" id="form-wizard-tab2">
                      <form>
                       
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-gender">Docteur</label>
                          <select class="form-select" name="docs" id="form-wizard-gender">
                            <option value="">Selectionner votre médécin ...</option>
                            <?php foreach ($docs as $doc): ?>
                                <option value="<?php echo $doc->id; ?>"><?php echo $doc->nom; ?> <?php echo $doc->prenom; ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-phone">Date & Heure</label>
                          <input class="form-control datetimepicker" id="datetimepicker" type="text" placeholder="d/m/y H:i" data-options='{"enableTime":true,"dateFormat":"d/m/y H:i","disableMobile":true}' />
                        </div>
                        
                        <div class="mb-3">
                          <label class="form-label" for="form-wizard-wizard-address">Commentaire</label>
                          <textarea class="form-control" rows="4" id="form-wizard-wizard-address" name ="" placeholder="Dites nous plus sur le but de consultation..."></textarea>
                        </div>
                      </form>
                    </div>
                    
                    <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel" aria-labelledby="form-wizard-tab4" id="form-wizard-tab4">
                      <div class="wizard-lottie-wrapper">
                        <div class="lottie wizard-lottie mx-auto my-3" data-options='{"path":"../../assets/img/animated-icons/celebration.json"}'></div>
                      </div>
                      <h4 class="mb-1">Your account is all set!</h4>
                      <p>Now you can access to your account</p><a class="btn btn-primary px-5 my-3" href="../../modules/forms/wizard.html">Start Over</a>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light">
                  <div class="px-sm-3 px-md-5">
                    <ul class="pager wizard list-inline mb-0">
                      <li class="previous">
                        <button class="btn btn-link ps-0" type="button"><span class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Prev</button>
                      </li>
                      <li class="next">
                        <button class="btn btn-primary px-5 px-sm-6" type="submit">Next<span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span></button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>