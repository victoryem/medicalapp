<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Register_model
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

class Register_model extends CI_Model {

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

  function insert($data){
    $this->db->insert('users', $data);
    return $this->db->insert_id();
  }

  function verify_email($key){
    $this->db->where('verification_key', $key);
    $this->db->where('is_email_verified', 'no');
    $query= $this->db->get('users');
    if($query->num_rows()>0){
      $data  = array(
        'is_email_verified' => 'yes'
      );
      $this->db->where('verification_key', $key);
      $this->db->update('users', $data);
      return true;
    }
    else {
      return false;
    }
  }

  function account_complete($data, $user_id){
    $this->db->where('id', $user_id);
    $this->db->update('users', $data);
  }

}


/* End of file Register_model.php */
/* Location: ./application/models/Register_model.php */