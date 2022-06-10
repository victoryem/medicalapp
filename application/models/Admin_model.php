<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Admin_model
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

class Admin_model extends CI_Model {

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

  public function get_all_users(){
        $this->db->select('id, nom, prenom, email, phone, adresse, role,statut');
        $this->db->from('users');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $query = $query->result();
        return $query; 
  }

  // One User Infos
  public function user($id){
    
        $this->db->select();
        $this->db->from('users');
        $this->db->where('id',$id);
        $query = $this->db->get();
        $query = $query->row();
        return $query; 
  }



  public function get_user($id){
    
    $this->db->where('id', $id);
    $query = $this->db->get('users');
    return $query->row();
}
  // All Medecine
  public function doctor(){

        $this->db->select('id, nom, prenom, email, phone, adresse, createDate, archive, statut');
        $this->db->where('role', 'medecin');
        $this->db->from('users');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $query = $query->result();
        return $query; 
  }

  //All Secretaries
  public function secretaries(){
    $this->db->select('id, nom, prenom, email, phone, adresse, createDate, archive, statut');
    $this->db->where('role', 'secretaire');
    $this->db->from('users');
    $this->db->order_by('id','DESC');
    $query = $this->db->get();
    $query = $query->result();
    return $query; 

  }

  public function archiver($id){
    $this->db->where('id', $id);
    $query= $this->db->get('users');
    if($query->num_rows()>0){
      $data  = array(
        'archive' => 'yes'
      );
      $this->db->where('id', $id);
      $this->db->update('users', $data);
      return true;
    }

  }

  public function unarchive($id){
    $this->db->where('id', $id);
    $query= $this->db->get('users');
    if($query->num_rows()>0){
      $data  = array(
        'archive' => 'no'
      );
      $this->db->where('id', $id);
      $this->db->update('users', $data);
      return true;
    }

  }


  public function edit($id, $data){
    $this->db->where('id', $id);
    $this->db->update('users', $data);
    return true;
  }

  public function get_all_admins(){

    $this->db->select('id, nom, prenom, email, phone, adresse, createDate, archive, statut');
    $this->db->from('users');
    $this->db->where('role','admin');
    $this->db->order_by('id','DESC');
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  public function get_all_dep(){

    $this->db->select('u.nom as nom, u.prenom as prenom, d.id as idDep, d.libDepartement as nomdep');
    $this->db->from('departements d');
    $this->db->join('users u', 'u.id  = d.chefDepartement', 'LEFT');
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function get_dep_doctors($dep){
    $this->db->select('u.nom as nom, u.prenom as prenom, u.id as id');
     $this->db->from('users u');
     $this->db->join('medecins m', 'm.user_id  = u.id', 'LEFT');
     $this->db->where('m.idDep', $dep);
     $query = $this->db->get();
     $query = $query->row();  
     return $query;
}

function  insert($data, $table){
  $this->db->insert($table, $data);
    return $this->db->insert_id();

}

function del($id, $table){
  $this->db->delete($table, array('id' => $id));
  return 'ok';
}

function all_dep(){
  $this->db->select();
  $this->db->from('departements');
  $query = $this->db->get();
  $query = $query->result();
  return $query; 

}
  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */