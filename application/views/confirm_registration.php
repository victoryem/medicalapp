<!DOCTYPE html>
<html>
<head>
 <title>Completer votre inscription</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
 <div class="container">
  <br />
  <h3 align="center">Completer votre inscription</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">Register</div>
   
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>Register/complet_registration">
     <div class="form-group">
      <label>Nom</label>
      <input type="text" name="nom" class="form-control" disabled value="<?php echo $nom; ?>" />
      <span class="text-danger"><?php echo form_error('nom'); ?></span>
     </div>
     <div class="form-group">
      <label>Prénoms</label>
      <input type="text" name="prenom" class="form-control" disabled value="<?php echo $prenom; ?>" />
      <span class="text-danger"><?php echo form_error('prenom'); ?></span>
     </div>
     <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" disabled class="form-control" value="<?php echo $email; ?>" />
      <span class="text-danger"><?php echo form_error('email'); ?></span>
     </div>
     <div class="form-group">
      <label>Mot de Passe</label>
      <input type="text" name="password" class="form-control" />
      <span class="text-danger"><?php echo form_error('role'); ?></span>
     </div>
     <div class="form-group">
      <label>Confirmer le Mot de Passe</label>
      <input type="password_confirm" name="password_confirm" class="form-control" />
      <span class="text-danger"><?php echo form_error('password_confirm'); ?></span>
     </div>
     <div class="form-group">
      <label>Téléphone</label>
      <input type="text" name="phone"  class="form-control"  />
      <span class="text-danger"><?php echo form_error('phone'); ?></span>
     </div>
     <div class="form-group">
      <label>Adresse</label>
      <input type="text" name="adresse"  class="form-control" />
      <span class="text-danger"><?php echo form_error('adresse'); ?></span>
     </div>
     
     <input type="hidden" name="user_id" value="<?php echo $id ?>">
     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>
