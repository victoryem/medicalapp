<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Departement
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

class Departement extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // 
    $data = array();
    $departements = $this->admin_model->get_all_dep();
    $docs = $this->admin_model->doctor();
    //var_dump($departements);
    //die;
    $data['docs'] = $docs;
    
    $data['departements'] = $departements;
    $data['page_title'] = 'Departement';
    $data['main_content'] = $this->load->view('admin/departement', $data, TRUE);
    $this->load->view('admin/index', $data);
  }

  public function add_dep(){
    if ($_POST) {
      $data = array(
        'libDepartement'=> $this->input->post('libDepartement', true),
        'chefDepartement'=> $this->input->post('chefDepartement', true)
      );
    

      $result = $this->admin_model-> insert($data, 'departements');
      if(!empty($result)){
        $data2=array(
          'idDep'=> $result
      );
        $result = $this->general_model->edit_option($data2,$this->input->post('chefDepartement', true),'users');
        redirect('admin/departement');
      }else{
        echo'something went wrong';
      }
    }
  }

 function del_dep($id){
    $result = $this->admin_model-> del($id, 'departements');
    if($result =='ok'){
      redirect('admin/departement');
    }
  }


  function edit_dep(){

    $data= array(
      'chefDepartement'=> $this->input->post('chefDepartement', true)
    );
    $id =$this->input->post('id', true);
    $result = $this->general_model->edit_option($data,$id,'departements');
    if ($result=='ok') {
      # code...
      redirect('admin/departement');
    }
  }

}


/* End of file Departement.php */
/* Location: ./application/controllers/Departement.php */