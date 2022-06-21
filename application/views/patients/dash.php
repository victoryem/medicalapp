<div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(<?php echo base_url(); ?>assets/img/icons/spot-illustrations/corner-4.png);"></div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Bienvenue M./Mmde <?php echo $this->session->userdata('nom') ?>. </h3>
                  <p class="mb-0">Retrouver toute vos informations MedicalApp ici... </p>
                </div>
              </div>
            </div>
</div>
<div class="col-lg-12 pe-lg-2 mb-3" id="rdv">
              <div class="card mb-3 mb-lg-0 h-100">
                <div class="card-header bg-light">
                  <h5 class="mb-0">Consultations</h5>
                </div>
                <div class="card-body fs--1">
                  <?php foreach ($consultations as $consultation): ?>
                    <div class="d-flex btn-reveal-trigger">
                      <div class="calendar">
                        <span class="calendar-month"><?php echo get_mois_str($consultation->date); ?></span><span class="calendar-day"><?php echo get_day($consultation->date); ?></span>
                        
                    </div>
                    
                      <div class="flex-1 position-relative ps-3">
                        <p class="mb-1">Commentaire: <a href="#!" class="text-700"><?php echo $consultation->commentaire; ?></a></p>
                        <p class="text-1000 mb-0">Date & Heure: <?php echo ($consultation->date); ?> </p>
                        <p class="text-1000 mb-0">Dr: <?php echo $consultation->nom ?> <?php echo $consultation->prenom ?></p>
                        <?php if($consultation->status == 0): ?>
                             <span class="badge bg-warning">Non validé</span>
                        <?php endif; ?>
                        <?php if($consultation->status == 1 && $consultation->date < now()): ?>
                                    <span class="badge bg-success">Validé</span>
                        <?php endif; ?>
                        <?php if($consultation->date > now()): ?>
                                    <span class="badge bg-dark dark__bg-dark">Est Passé</span>
                        <?php endif; ?>
                        <div class="border-dashed-bottom my-3"></div>
                      </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="card-footer bg-light p-0 border-top"><a class="btn btn-link d-block w-100" href="app/events/event-list.html"></a></div>
              </div>
            </div>

            <div class="row g-3 mb-3">
            <div class="col-lg-6" id="ordon">
              <div class="card h-lg-100">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                <h6 class="mb-0">ordonnances</h6>
                </div>
                <div class="card-body pb-0">
                  <?php if(!empty($ordonnances)): ?>
                    <?php foreach ($ordonnances as $ordonnance): ?>
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail">
                      <img class="border h-100 w-100 fit-cover rounded-2" src="<?php echo base_url(); ?>assets/img/products/3-thumb.png" alt="" />
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iphone.jpg</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="<?php echo base_url(); ?>assets/img/icons/cloud-download.svg" download="download"><img src="<?php echo base_url(); ?>assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                        <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="<?php echo base_url(); ?>assets/img/icons/edit-alt.svg" alt="" width="15" /></button>
                      </div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <?php endforeach; ?>
                  <?php else: ?>
                      <div class="text-center ">
                          <p class="fw-bold fs-1 mt-3">Aucune ordonnance trouvée.</p>
                        </div>
                  <?php endif; ?> 
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card h-lg-100" id="doc">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Documents</h6>
                </div>
                <div class="card-body pb-0">
                  <?php if(!empty($documents)): ?>
                    <?php foreach ($documents as $document): ?>
                    <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                      <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2" src="<?php echo base_url(); ?>assets/img/icons/zip.png" alt="" />
                      </div>
                      <div class="ms-3 flex-shrink-1 flex-grow-1">
                        <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!"><?php echo $document->type; ?></a></h6>
                        <div class="fs--1"><span class="fw-semi-bold"></span><span class="fw-medium text-600 ms-2">Date: <?php echo $document->date; ?></span></div>
                        <div class="fs--1"><span class="fw-semi-bold"></span><span class="fw-medium text-600 ms-2">Dr <?php echo $document->nom; ?> <?php echo $document->prenom; ?></span></div>
                        <div class="hover-actions end-0 top-50 translate-middle-y">
                            <a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Télécharger" href="<?php echo base_url(); ?><?php echo $document->urlDoc; ?>" download="download"><img src="<?php echo base_url(); ?>assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                            <a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Partager" href="#"><img src="<?php echo base_url(); ?>assets/img/icons/cloud-upload.svg" alt="" width="15"  onclick="copylink(<?php echo base_url(); ?><?php echo $document->urlDoc; ?>)"/></a>
                        </div>
                      </div>
                    </div>
                    <hr class="bg-200" />
                    <?php endforeach; ?>
                      <?php else: ?>
                        <div class="text-center ">
                            <p class="fw-bold fs-1 mt-3">Aucun document trouvé.</p>
                          </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

<script>

    function copylink($link){
        var clink = $link;
        console.log(clink);
        navigator.clipboard.writeText($clink);
    }
</script>