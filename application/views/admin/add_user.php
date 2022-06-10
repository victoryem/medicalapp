<div class="row g-3 mb-3">
                <div class="col-xl-12 col-xxl-12">
                  <div class="row g-3">
                    <div class="col-lg-4 col-xl-12">
                      <div class="card h-100">
                        <div class="card-header d-flex flex-between-center pb-0">
                          <h2 class="mb-0">Ajouter un utilisateur</h2>
                        </div>
                        <div class="card-body pt-2">
                          <div class="row g-0 h-100 align-items-center">
                            <div class="col">
                              <div class="d-flex align-items-center"><img class="me-3" src="assets/img/icons/weather-icon.png" alt="" height="60" />
                                <div>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<form class="row g-3" method="post" action="<?php echo base_url(); ?>Register/validation">

 <div class="col-md-6">
    <label class="form-label">Nom</label>
    <input class="form-control"  type="text" name="nom" />
  </div>

  <div class="col-md-6">
    <label class="form-label">Prénom</label>
    <input class="form-control"  type="text" name="prenom" />
  </div>
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input class="form-control" type="email" name = "email" />
  </div>
  <div class="col-md-6">
  <label class="form-label">Role</label>
        <select class="form-select" aria-label="Default select example" name ="role">
            <option selected="">Selectionné</option>
            <option value="admin">Administrateur</option>
            <option value="medecin">Medécin</option>
            <option value="secretaire">Secrétaire</option>
        </select>
  </div>
    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('id') ?>">
     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
   
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enregistrer</button>
  </div>
</form>