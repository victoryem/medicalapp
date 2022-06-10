<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Appointement
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

class Appointement extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // 
    $departement = $this->admin_model-> all_dep();
    $data = array();
    $data['departements'] = $departement;
    $data['page_title'] = 'Prener rendez vous avec votre medécin';
    $data['main_content'] = $this->load->view('appointement/step1', $data, TRUE);
    $this->load->view('appointement/index', $data);
  }

  public function next(){
    //var_dump($_POST);
    //die;
    if($_POST){
      $doctors = $this->admin_model-> get_dep_doctors($this->input->post('id', true));
      var_dump($doctors);
      die;
      $data = array();
      $data['docs'] = $doctors;
      $data['page_title'] = 'Prener rendez vous avec votre medécin';
      $data['main_content'] = $this->load->view('appointement/step2', $data, TRUE);
      $this->load->view('appointement/index', $data);
    }
    
    
  }

}


/* End of file Appointement.php */
/* Location: ./application/controllers/Appointement.php */