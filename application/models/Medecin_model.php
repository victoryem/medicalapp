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

  function get_ordonnance_patient($id){
    $this->db->select('p.nom as nom, p.prenom as prenom, p.id as id, o.date as date');
    $this->db->from('patients p');
    $this->db->join('ordonnances o', 'o.idPatient  = p.id');
    $this->db->where('o.id',$id);
    $query = $this->db->get();
    $query = $query->row();
    return $query; 
  }
  

  function get_ordonnance_medoc($id){
    $this->db->select('a.*,m.nom as nom, f.libForme as lib, c.libCategorie as cat');
    $this->db->from('appartenir a');
    $this->db->join('medicaments m','m.id = a.idMedi');
    $this->db->join('form_medicament f','f.id = m.idForm');
    $this->db->join('categorie_medicament c', 'c.id = m.idCat');
    $this->db->where('a.idOrdon',$id);
    $query = $this->db->get();
    $query = $query->result();
    return $query;

  }


  function get_all_dispos(){
    $this->db->select('d.id, d.date, i.heureDebut, i.heureFin');
    $this->db->from('dates d');
    $this->db->join('disponibilites i', 'i.idDate  = d.id');
    $this->db->where('i.idMedecin', $this->session->userdata('id'));
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function get_end(){
    $this->db->select('p.nom as nom, p.prenom as prenom, a.date as date, a.commentaire as comment, a.id as id');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id');
    $this->db->where('a.status',2);
    $this->db->where('a.idMedecin', $this->session->userdata('id'));
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function get_confirmer(){

    $this->db->select('p.nom as nom, p.prenom as prenom, a.date as date, a.commentaire as comment, a.id as id');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id');
    $this->db->where('a.status',1);
    $this->db->where('a.idMedecin', $this->session->userdata('id'));
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }
  function get_no_confirmer(){

    $this->db->select('p.nom as nom, p.prenom as prenom, a.date as date, a.commentaire as comment, a.id as id');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id');
    $this->db->where('a.status',0);
    $this->db->where('a.idMedecin', $this->session->userdata('id'));
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }

  function get_today_rdv(){
    $this->db->select('p.nom as nom, p.prenom as prenom, a.date as date, a.commentaire as comment, a.id as id, a.heure as heure');
    $this->db->from('patients p');
    $this->db->join('appointements a', 'a.idPatient  = p.id');
    $this->db->where('a.status',1);
    $this->db->where('a.date',today());
    $this->db->where('a.idMedecin', $this->session->userdata('id'));
    $query = $this->db->get();
    $query = $query->result();
    return $query; 
  }


  // ------------------------------------------------------------------------

}

/* End of file Medecin_model.php */
/* Location: ./application/models/Medecin_model.php */