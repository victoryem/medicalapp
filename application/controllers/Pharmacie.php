<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Pharmacie
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Pharmacie extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // 
  }

  public function add_medicament(){
    if ($_POST) {
      # code...
      $data = array(
        'nom'=> $this->input->post('nom', true),
        'idCat' => $this->input->post('idCat', true),
        'idForm' => $this->input->post('idForm', true)
      );
      $return = $this->general_model->insert($data, 'medicaments');

      if ($return !== ' ') {
        # code...
        if ($this->session->userdata('role')== 'medecin') {
          # code...
          $this->session->set_flashdata('sucess', 'Nouvelle catégorie ajoutée');
          redirect('medecins/dashboard/pharma');
        }else{
          this->session->set_flashdata('sucess', 'Nouvelle catégorie ajoutée');
          redirect('secretaires/dashboard/pharma');
        }
        
      }
    }
  }

  public function add_cat(){
    if ($_POST) {
      # code...
      $data = array(
        'libCategorie'=> $this->input->post('libCategorie', true),
      );
      $return = $this->general_model->insert($data, 'categorie_medicament');

      if ($return !== ' ') {
        # code...
        if ($this->session->userdata('role')== 'medecin') {
          # code...
          $this->session->set_flashdata('sucess', 'Nouvelle catégorie ajoutée');
          redirect('medecins/dashboard/pharma');
        }else{
          this->session->set_flashdata('sucess', 'Nouvelle catégorie ajoutée');
          redirect('secretaires/dashboard/pharma');
        }
        
        
      }
    }
  }

  public function add_form(){
    if ($_POST) {
      # code...
      $data = array(
        'libForme'=> $this->input->post('libForme', true),
      );
      $return = $this->general_model->insert($data, 'form_medicament');

      if ($return !== ' ') {
        # code...
        if ($this->session->userdata('role')== 'medecin') {
          # code...
          $this->session->set_flashdata('sucess', 'Nouvelle catégorie ajoutée');
          redirect('medecins/dashboard/pharma');
        }else{
          $this->session->set_flashdata('sucess', 'Nouvelle catégorie ajoutée');
          redirect('secretaires/dashboard/pharma');
        }
        
      }
    }
  }

  public function del($id){
    $return = $this->general_model->del($id, 'medicaments');
    if ($return == 'ok') {
      if ($this->session->userdata('role')== 'medecin') {
        # code...
        $this->session->set_flashdata('sucess', 'Nouvelle catégorie ajoutée');
        redirect('medecins/dashboard/pharma');
      }else{
        $this->session->set_flashdata('sucess', 'Nouvelle catégorie ajoutée');
        redirect('secretaires/dashboard/pharma');
      }
    }

  }

}


/* End of file Pharmacie.php */
/* Location: ./application/controllers/Pharmacie.php */