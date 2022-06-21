<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Ordonnances
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

class Ordonnances extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('id')) {
      redirect('login');
    }
  }

  public function index()
  {
    // 
    $data = array();
    $data['page_title'] = 'Page de gestion des ordonnances.';
    $data['main_content'] = $this->load->view('medecins/ordonnance/all_ordonnances', $data, TRUE);
    $this->load->view('medecins/index', $data);
  }

  public function new_ordonnance($id){
    $data = array();
    $medicaments= $this->general_model->get_all_medicament();
    $patient = $this->medecin_model->get_patient($id);
    $data['patient'] = $patient;
    $data['medicaments'] =$medicaments;
    $data['settings'] = get_settings();
    $data['page_title'] = 'Créer une ordonnance.';
    $data['main_content'] = $this->load->view('medecins/ordonnance/new_ordonnance', $data, TRUE);
    $this->load->view('medecins/index', $data);
  }

}


/* End of file Ordonnances.php */
/* Location: ./application/controllers/Ordonnances.php */