<!DOCTYPE html>
<html>
<head>
 <title>Ajouter un nouveau utilisateurs</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
 <div class="container">
  <br />
  <h3 align="center">Ajouter un nouveau utilisateurs</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">Register</div>
   
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>Register/validation">
     <div class="form-group">
      <label>Nom</label>
      <input type="text" name="nom" class="form-control" value="<?php echo set_value('nom'); ?>" />
      <span class="text-danger"><?php echo form_error('nom'); ?></span>
     </div>
     <div class="form-group">
      <label>Prénoms</label>
      <input type="text" name="prenom" class="form-control" value="<?php echo set_value('prenom'); ?>" />
      <span class="text-danger"><?php echo form_error('prenom'); ?></span>
     </div>
     <div class="form-group">
      <label>Role</label>
      <select name="role" id="" class="form-control">
          <option value="admin">Admin</option>
          <option value="secretaire">Sécrétaire</option>
          <option value="medecin">Médecin</option>
      </select>
      <span class="text-danger"><?php echo form_error('role'); ?></span>
     </div>
     <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" />
      <span class="text-danger"><?php echo form_error('email'); ?></span>
     </div>
     <input type="hidden" name="user_id" value="1">
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
