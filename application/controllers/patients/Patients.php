<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Patients
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

class Patients extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // 

    $data =array();
    $data['page_title'] ='Espace Patient';
    $this->load->view('patients/login', $data); 
  }

  public function validation(){
    $this->form_validation->set_rules('code', 'Votre code patient', 'required' );
    if ($this->form_validation->run()) {
      $result = $this->patient_model->can_login($this->input->post('code', true));
      if ($result =='login') {
        redirect('patients/dashboard');
            }
    }
  }

  public function connexion($code){
    $this->form_validation->set_rules('code', 'Votre code patient', 'required' );
    if ($this->form_validation->run()) {
      $result = $this->patient_model->can_login($code);
      if ($result =='login') {
        redirect('patients/dashboard');
            }
    }
  }

  public function logout(){
    
    $this->session->sess_destroy();
    $this->session->set_flashdata('msg', 'Déconnexion réussie');
    redirect(base_url('patients'));

  }
}


/* End of file Patients.php */
/* Location: ./application/controllers/Patients.php */