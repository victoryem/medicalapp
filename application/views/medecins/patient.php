<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                        <h4 class="mb-1"> Fiche patient</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <div class="col-lg-6">
              <div class="card mb-3 h-100">
                <div class="card-header bg-light">
                  <h5 class="mb-0">Informations de votre patient</h5>
                </div>
                <div class="card-body fs--1">
                  <div class="d-flex">
                    <div class="flex-1 position-relative ps-3">
                      <h6 class="fs-0 mb-0"><?php echo $patient->nom ?> <?php echo $patient->prenom ?><span data-bs-toggle="tooltip" data-bs-placement="top" title="Patient"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h6>
                      <div class="border-dashed-bottom my-3"></div>
                      <p class="mb-1">Email: <a href="#!"><?php echo $patient->email ?></a></p>
                      <div class="border-dashed-bottom my-3"></div>
                      <p class="text-1000 mb-0"> Téléphone: <?php if(!empty($patient->phone)): ?><?php echo $patient->phone ?></p><?php else: ?> N/A<?php endif; ?>
                      <div class="border-dashed-bottom my-3"></div>
                      <p class="text-1000 mb-0"> Sexe: <?php if(!empty($patient->sexe)): ?><?php echo $patient->sexe?></p><?php else: ?> N/A<?php endif; ?>
                      <div class="border-dashed-bottom my-3"></div>
                      <p class="text-1000 mb-0"> Poids: <?php if(!empty($patient->poids)): ?><?php echo $patient->poids?></p><?php else: ?> N/A<?php endif; ?>
                      <div class="border-dashed-bottom my-3"></div>
                      <p class="text-1000 mb-0"> Taille: <?php if(!empty($patient->taille)): ?><?php echo $patient->taille?></p><?php else: ?> N/A<?php endif; ?>
                      <div class="border-dashed-bottom my-3"></div>
                      <p class="text-1000 mb-0"> Année de naissance: <?php if(!empty($patient->date_de_naissance)): ?><?php echo $patient->date_de_naissance?></p><?php else: ?> N/A<?php endif; ?>
                      <div class="border-dashed-bottom my-3"></div>
                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduser-modal" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Modifier">Modifier le patient</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="col-lg-6 pe-lg-2 mb-3">
              <div class="card mb-3 mb-lg-0 h-100">
                <div class="card-header bg-light">
                  <h5 class="mb-0">Consultations</h5>
                </div>
                <div class="card-body fs--1">
                  <?php foreach ($consultations as $consultation): ?>
                    <div class="d-flex btn-reveal-trigger">
                      <div class="calendar"><span class="calendar-month"><?php echo get_mois_str($consultation->date); ?></span><span class="calendar-day"><?php echo get_day($consultation->date); ?></span></div>
                      <div class="flex-1 position-relative ps-3">
                        <p class="mb-1">Commentaire: <a href="#!" class="text-700"><?php echo $consultation->commentaire; ?></a></p>
                        <p class="text-1000 mb-0">Heure: <?php echo get_hours($consultation->date); ?></p>
                        <div class="border-dashed-bottom my-3"></div>
                      </div>
                    </div>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
          <div class="row g-3 mb-3">
            <div class="col-lg-6">
              <div class="card h-lg-100">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                <h6 class="mb-0">ordonnances</h6><a class="py-1 fs--1 font-sans-serif" href="<?php echo base_url(); ?>medecins/ordonnances/new_ordonnance/<?php echo $patient->id; ?>">Ajouter une ordonnance</a>
                </div>
                <div class="card-body pb-0">
                  <?php if(!empty($ordonnances)): ?>
                    <?php foreach ($ordonnances as $ordonnance): ?>
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail">
                      <img class="border h-100 w-100 fit-cover rounded-2" src="<?php echo base_url(); ?>assets/img/icons/zip.png" alt="" />
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="<?php echo base_url(); ?>medecins/ordonnances/view_ordonnance/<?php echo $ordonnance->id; ?>">ordonnance #<?php echo $ordonnance->id; ?></a></h6>
                      <div class="fs--1"><span class="fw-semi-bold"></span><span class="fw-medium text-600 ms-2"><?php echo $ordonnance->date; ?></span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y">
                        <a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir" href="<?php echo base_url(); ?>medecins/ordonnances/view_ordonnance/<?php echo $ordonnance->id; ?>"><img src="<?php echo base_url(); ?>assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                      </div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <?php endforeach; ?>
                  <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Aucune ordonnance trouvée pour ce patient.</p>
                        </div>
                  <?php endif; ?> 
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card h-lg-100">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Documents</h6><a class="py-1 fs--1 font-sans-serif"  data-bs-toggle="modal" data-bs-target="#adduser-doc" href="#adduser-doc">Ajouter un document</a>
                </div>
                <div class="card-body pb-0">
                  <?php if(!empty($documents)): ?>
                    <?php foreach ($documents as $document): ?>
                    <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                      <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2" src="<?php echo base_url(); ?>assets/img/icons/zip.png" alt="" />
                      </div>
                      <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!"><?php echo $document->type; ?></a></h6>
                        <div class="fs--1"><span class="fw-semi-bold"></span><span class="fw-medium text-600 ms-2"><?php echo $document->date; ?></span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Voir" href="<?php echo base_url(); ?><?php echo $document->urlDoc; ?>" download="download"><img src="<?php echo base_url(); ?>assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                        </div>
                      </div>
                    </div>
                    <hr class="bg-200" />
                    <?php endforeach; ?>
                      <?php else: ?>
                        <div class="text-center ">
                            <p class="fw-bold fs-1 mt-3">Aucun document trouvé pour ce patient.</p>
                          </div>
                  <?php endif; ?>
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
        <form class="row g-3" method="post" action="<?php echo base_url(); ?>medecins/dashboard/edit_patient">
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
                      <input class="form-control" id="first-name" type="text" value="<?php echo $patient->poids;  ?>" name="poids" />
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
                      <input class="form-control" id="first-name" type="text" value="<?php echo $patient->taille;  ?>" name="taille"  placeholder="ex: 1m25, 95cm"/>
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

  <!---
            Modal pour ajouter un document au patient

    -->

  <div class="modal fade" id="adduser-doc" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Ajouter un document à <?php echo $patient->nom ?> <?php echo $patient->prenom ?> </h4>
        </div>
        <div class="p-4 pb-0">
        <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-0">Ajouter un document au patient</h5>
            </div>
            <div class="card-body bg-light">
              <form class="" action="<?php echo base_url(); ?>medecins/dashboard/add_doc" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label" for="customFile">Choisser votre document(au format PDF uniquement)</label>
                <input class="form-control" id="customFile" type="file" name ="file"/>
              </div>
                <div class="col-lg-12">
                      <label class="form-label" for="first-name">Type de document</label>
                      <select class="form-select js-choice" id="organizerSingle" size="1" name="type" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">sélectionner</option>
                            <option value="Resultat d'analyse">Resultat d'analyse </option>
                            <option value="ordonnance">ordonnance</option>
                            <option value="Certificat médical">Certificat Médical</option>
                            <option value="Autres">Autres</option>
                        </select>
                </div>
                <div class="form-check form-switch col-lg-12">
                  <input class="form-check-input" id="flexSwitchCheckChecked" name ="patientView" type="checkbox" checked="" />
                  <label class="form-check-label" for="flexSwitchCheckChecked" >Envoyer une copie au patient</label>
                </div>
                  <input type="hidden" name="idPatient" value="<?php echo $patient->id; ?>">
                  <input type="hidden" name="idDoc" value="<?php echo $this->session->userdata('id'); ?>">
                  <hr>
                  <div class="col-lg-6">
                        <button class="btn btn-primary" type="submit" >Ajouter </button>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
  </div>


  