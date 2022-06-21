
            
<div class="search-box" data-list='{"valueNames":["title"]}'>
  <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
    <input class="form-control search-input fuzzy-search" type="search" placeholder="Entrer le nom du médicament..." aria-label="Search" />
    <span class="fas fa-search search-box-icon"></span>
  </form>
  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
    <div class="btn-close-falcon" aria-label="Close"></div>
  </div>
  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
    <div class="scrollbar list py-3" style="max-height: 24rem;">
      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2"><a href="">Ajouter un médicament</a></h6>


      <hr class="bg-200 dark__bg-900" />
      <?php if(!empty($medicaments)): ?>
      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Liste des médicaments disponibles</h6>
      <?php foreach ($medicaments as $medicament): ?>
      <a class="dropdown-item px-card py-2" href="">
        <div class="d-flex align-items-center">
        <!--<div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="../../assets/img/products/3-thumb.png" alt="" /></div>-->
          <div class="flex-1" data_id="<?php echo $medicament->id  ?>">
            <h6 class="mb-0 title"><?php echo $medicament->nom  ?></h6>
            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold"><?php echo $medicament->libCategorie  ?></span><span class="fw-medium text-600 ms-2"><?php echo $medicament->libForme ?></span></p>
          </div>
        </div>
      </a>
    
      <hr class="bg-200 dark__bg-900" />
      <?php endforeach ?>
      <?php else: ?>
                      <div class="text-center">
                          <p class="fw-bold fs-1 mt-3">Aucune demande non traité.</p>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>
    </div>
    <div class="text-center mt-n3">
      <p class="fallback fw-bold fs-1 d-none">Aucun médicament trouvé.</p>
    </div>
  </div>
</div>

