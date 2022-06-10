<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Auth_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

  function can_login($email, $password){
    $input_password = hash_password($password);
    $this->db->where('email',$email);
    $query = $this->db->get('users');
    if($query->num_rows()>0){
      foreach($query->result() as $row){
        if($row->is_email_verified == 'yes'){
          $store_password = $row->password;
          if(password_verify($password, $store_password)){
            $this->session->set_userdata('id', $row->id);
            //$role = $row->role;
            //return $role;
            $data = array(
              'id'=> $row->id,
              'nom'=> $row->nom,
              'prenom'=> $row->prenom,
              'email'=> $row->email,
              'role'=> $row->role,
              'statut'=> $row->statut,
              'logged_in'=> TRUE
            );
            $this->session->set_userdata($data);
            return 'login';
            
          }
          else {
            return 'Mauvais mot de passe';
          }
        }
        else {
          return "Merci de verifier à votre email.";
        }
      }
    }
    return 'Email introuvable';
  }


}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */