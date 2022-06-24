<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Dashboard
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

class Dashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('id')) {
      redirect('patients');
    }
  }

  public function index()
  {
    // 

    $appointements = $this->patient_model->get_all_appoitement($this->session->userdata('id'));
    $documents =  $this->patient_model->get_all_document($this->session->userdata('id'));
    $ordonnances = $this->patient_model->get_all_ordonnance($this->session->userdata('id'));
 

    $data = array();
    $data['consultations'] = $appointements;
    $data['documents'] = $documents;
    $data['ordonnances'] = $ordonnances;
    $data['page_title'] = 'Vos Informations MedicalApp';
    $data['main_content'] = $this->load->view('patients/dash', $data, TRUE);
    $this->load->view('patients/index', $data);

  }
  function view_ordonnance($id){
    $patient = $this->medecin_model->get_ordonnance_patient($id);
    $medicaments = $this->medecin_model->get_ordonnance_medoc($id);
  
    $data = array();
    $data['settings'] = get_settings();
    $data['patient'] = $patient;
    $data['medicaments'] = $medicaments;
    $data['page_title'] = 'Ordonnance.';
    $data['main_content'] = $this->load->view('patients/view_ordonnance', $data, TRUE);
    $this->load->view('patients/index', $data);
  }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */