<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Medecin_model
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

class Medecin_model extends CI_Model {

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

  function get_no_confirme(){

    $this->db->select(' a.id as ide,p.nom as nom, p.prenom as prenom, a.date as date, a.commentaire as comment, p.id as id');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id');
    $this->db->where('a.status',0);
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function patients(){
    $this->db->select('p.nom as nom, p.prenom as prenom, p.email as email, p.phone as phone, p.adresse as adresse, p.id as id');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id', 'LEFT');
    $this->db->where('a.idMedecin', $this->session->userdata('id'));
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function get_confirme(){

    $this->db->select();
    $this->db->from('appointements');
    $this->db->where('status',1);
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function get_patient($id){
    
    $this->db->select();
    $this->db->from('patients');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $query = $query->row();
    return $query; 
  }

  function get_document($idPatient, $idDoc){
    $this->db->select();
    $this->db->from('documents');
    $this->db->where('idPatient',$idPatient);
    $this->db->where('idDoc',$idDoc);
    $query = $this->db->get();
    $query = $query->result();
    return $query;
  }

  function get_ordonnance($idPatient, $idDoc){

    $this->db->select();
    $this->db->from('ordonnances');
    $this->db->where('idPatient',$idPatient);
    $this->db->where('idMedecin',$idDoc);
    $query = $this->db->get();
    $query = $query->result();
    return $query;
  }

  function get_all_patient_app($id, $idDoc){

    $this->db->select();
    $this->db->from('appointements');
    $this->db->where('idPatient',$id);
    $this->db->where('idMedecin',$idDoc);
    $query = $this->db->get();
    $query = $query->result();
    return $query;
  }

  function edit_patient($action, $id){
      $this->db->where('id',$id);
      $this->db->update('patients',$action);
      return 'ok';
  }

  


  // ------------------------------------------------------------------------

}

/* End of file Medecin_model.php */
/* Location: ./application/models/Medecin_model.php */