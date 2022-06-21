<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Patient_model
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

class Patient_model extends CI_Model {

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

  function can_login($code){

    $this->db->where('public_id', $code);
    $query= $this->db->get('patients');
    if ($query->num_rows()>0) {
      foreach ($query->result() as $row) {
        # code...
        $data = array(
          'id'=> $row->id,
          'nom'=> $row->nom,
          'prenom'=> $row->prenom,
          'email'=> $row->email,
          'logged_in'=> TRUE
        );
        $this->session->set_userdata($data);
        return 'login';
      }
    }
    else{
        return 'Code invalide';
    }
  }

  function get_all_appoitement($idPatient){

    $this->db->select('a.id as id, a.date as date, a.status as status,a.commentaire as commentaire, u.nom as nom,u.prenom as prenom');
    $this->db->from('appointements a');
    $this->db->join('users u', 'u.id = a.idMedecin');
    $this->db->where('a.idPatient',$idPatient);
    $query = $this->db->get();
    $query = $query->result();
    return $query;
  }

  function get_all_document($idPatient){

    $this->db->select('d.id, d.date, d.urlDoc,d.shareId,d.type, u.nom,u.prenom');
    $this->db->from('documents d');
    $this->db->join('users u', 'u.id = d.idDoc');
    $this->db->where('d.idPatient',$idPatient);
    $this->db->where('d.patientView',1);
    $query = $this->db->get();
    $query = $query->result();
    return $query;
  }

  function get_all_ordonnance($idPatient){
    $this->db->select('o.id, o.date, u.nom,u.prenom');
    $this->db->from('ordonnances o');
    $this->db->join('users u', 'u.id = o.idMedecin');
    $this->db->where('o.idPatient',$idPatient);
    $query = $this->db->get();
    $query = $query->result();
    return $query;


  }
  // ------------------------------------------------------------------------

}

/* End of file Patient_model.php */
/* Location: ./application/models/Patient_model.php */