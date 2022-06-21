<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Secretaires_model
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

class Secretaires_model extends CI_Model {

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

  function patients(){
    $this->db->select('p.nom as nom, p.prenom as prenom, p.email as email, p.phone as phone, p.adresse as adresse, p.id as id');
    $this->db->from('patients p');
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }
  function get_no_confirme(){

    $this->db->select('p.nom as nom, p.prenom as prenom, a.date as date, a.commentaire as comment, a.id as id');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id');
    $this->db->where('a.status',0);
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function get_confirme(){

    $this->db->select('p.nom as nom, p.prenom as prenom, a.date as date, a.commentaire as comment, a.id as id');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id');
    $this->db->where('a.status',1);
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function get_all_medecins(){

    $this->db->select('nom, prenom, id');
    $this->db->from('users');
    $this->db->where('role','medecin');
    $this->db->where('statut',1);
    $query = $this->db->get();
    $query = $query->result();
    return $query; 

  }
  

  function get_all_patients(){

    $this->db->select('nom, prenom, id');
    $this->db->from('patients');
    $query = $this->db->get();
    $query = $query->result();
    return $query; 

  }

  function get_end(){
    $this->db->select('p.nom as nom, p.prenom as prenom, a.date as date, a.commentaire as comment, a.id as id');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id');
    $this->db->where('a.status',2);
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  // ------------------------------------------------------------------------

}

/* End of file Secretaires_model.php */
/* Location: ./application/models/Secretaires_model.php */