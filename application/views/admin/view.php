<div class="row">
            <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                  <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url(<?php echo base_url(); ?>/assets/img/generic/4.jpg);">
                    </div>
                    <!--/.bg-holder-->
                  </div>
                  <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img src="<?php echo base_url(); ?>/assets/img/team/2.jpg" width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" />      
                    </div>
 
                  </div>
                </div>
                <div class="card-body">
              <div class="row">
                <div class="col-lg-8">
                  <h4 class="mb-1"> <?php echo $user->nom ?> <?php echo $user->prenom ?>
                  <?php if($user->statut == 0): ?>
                                    <span class="badge bg-dark dark__bg-dark">Inactif</span>
                                  <?php endif; ?>
                                  <?php if($user->statut == 1 && $user->archive == 'no'): ?>
                                    <span class="badge bg-success">Actif</span>
                                  <?php endif; ?>
                                  <?php if($user->statut == 1 && $user->archive == 'yes'): ?>
                                    <span class="badge bg-warning">Archiver</span>
                    <?php endif; ?>
                  </h4>
                  <?php if($user->role == 'admin'): ?>
                    <td class="align-middle white-space-nowrap role "><h5 class="fs-0 fw-normal">Administrateur</h5></td>
                  <?php endif; ?>
                  <?php if($user->role == 'medecin'): ?>
                    <td class="align-middle white-space-nowrap role "><h5 class="fs-0 fw-normal">Médecin</h5></td>
                  <?php endif; ?>
                  <?php if($user->role == 'secretaire'): ?>
                      <td class="align-middle white-space-nowrap role "><h5 class="fs-0 fw-normal">Sécretaire</h5></td>
                  <?php endif; ?>
                  
                  <p class="text-500"><?php echo $user->adresse ?></p>
                  <?php if($user->statut == 1 && $user->archive == 'yes'): ?>
                      <button class="btn btn-danger me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>admin/dashboard/unarchive/<?php echo $user->id;  ?>" style = "color:white">Desarchiver cet utilisateur</a> </button>
                  <?php endif; ?>
                  <?php if($user->statut == 1 && $user->archive == 'no'): ?>
                      <button class="btn btn-warning me-1 mb-1" type="button"><a href="<?php echo base_url(); ?>admin/dashboard/archiver/<?php echo $user->id;  ?>" style = "color:white">Archiver cet utilisateur</a> </button>
                  <?php endif; ?>
                  <div class="border-dashed-bottom my-4 d-lg-none"></div>
                </div>
            </div>
              </div>
            </div>
          </div>

          <div class="card mb-3">
                <div class="card-header bg-light d-flex justify-content-between">
                  <h5 class="mb-0">Activités recentes</h5><a class="font-sans-serif" href="../../app/social/activity-log.html">Voir tous</a>
                </div>
                <div class="card-body fs--1 p-0">
                  <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                    <div class="notification-avatar">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">🎁</span></div>
                      </div>
                    </div>
                    <div class="notification-body">
                      <p class="mb-1"><strong>Jennifer Kent</strong> Congratulated <strong>Anthony Hopkins</strong></p>
                      <span class="notification-time">November 13, 5:00 Am</span>

                    </div>
                  </a>

                  <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                    <div class="notification-avatar">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">🏷️</span></div>
                      </div>
                    </div>
                    <div class="notification-body">
                      <p class="mb-1"><strong>California Institute of Technology</strong> tagged <strong>Anthony Hopkins</strong> in a post.</p>
                      <span class="notification-time">November 8, 5:00 PM</span>

                    </div>
                  </a>

                  <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                    <div class="notification-avatar">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📋️</span></div>
                      </div>
                    </div>
                    <div class="notification-body">
                      <p class="mb-1"><strong>Anthony Hopkins</strong> joined <strong>Victory day cultural Program</strong> with <strong>Tony Stark</strong></p>
                      <span class="notification-time">November 01, 11:30 AM</span>

                    </div>
                  </a>

                  <a class="notification border-x-0 border-bottom-0 border-300 rounded-top-0" href="#!">
                    <div class="notification-avatar">
                      <div class="avatar avatar-xl me-3">
                        <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📅️</span></div>
                      </div>
                    </div>
                    <div class="notification-body">
                      <p class="mb-1"><strong>Massachusetts Institute of Technology</strong> invited <strong>Anthony Hopkin</strong> to an event</p>
                      <span class="notification-time">October 28, 12:00 PM</span>

                    </div>
                  </a>

                </div>
              </div>
          