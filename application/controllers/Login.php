<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Login
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

class Login extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();

    $this->load->library('form_validation');
    //$this->load-->library('encrypt');
  }

  public function index()
  {
    // 
   
    $this->load->view('login');
  }

  function validation(){
    
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Mot de passe', 'required' );
    if ($this->form_validation->run()) {
      # code...
      $result = $this->auth_model->can_login($this->input->post('email'), $this->input->post('password'));
      
      if($result =='login'){
        //$role = get_user_role($this->session->userdata('id'));
        //var_dump($this->session->userdata('id'));
        //die;
        if ($this->session->userdata('role')=='admin') {
          redirect('admin/dashboard');
        }elseif($this->session->userdata('role')=='medecin') {
          redirect('medecins/dashboard');
        }else{
          redirect('secretaires/dashboard/demandes');
        }
        
      }
      else {
        $this->session->set_flashdata('message', $result);
        redirect(base_url('login'));
      }
    }
    else {
      $this->index();
    }

  }

  

   public function logout(){
    
        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'Déconnexion réussie');
        redirect('login/index');
        redirect(base_url('login'));
  }

}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */