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
      redirect('login');
    }
  }

  public function index()
  {
    // 
    $data = array();
    $data['page_title'] = 'Tableau de bord';
    $data['main_content'] = $this->load->view('admin/dashboard', $data, TRUE);
    $this->load->view('admin/index', $data);

  }

  public function users(){

    $data = array();
    $users = $this->admin_model->get_all_users();
    //var_dump($users);
    //die;
    $data['page_title'] = "Gestion d'utilisateurs";
    $data['users'] = $users;
    $data['main_content'] = $this->load->view('admin/users', $data, TRUE);
    
    $this->load->view('admin/index', $data);
  }


  public function add(){
    $data = array();
    $data['page_title'] = 'Ajouter un utilisateur';
    $data['main_content'] = $this->load->view('admin/add_user', $data, TRUE);
    $this->load->view('admin/index', $data);
  }
  
  public function mycompte(){
    $data = array();
    $user = $this->admin_model->user($this->session->userdata('id'));
    $data['user']  = $user;
    $data ['page_title'] = 'Infos utilisateur';
    $data['main_content'] = $this->load->view('admin/myaccount', $data, TRUE);
    $this->load->view('admin/index', $data);
  }


  public function change_password(){
   
    if($_POST){
            
      $id = $this->session->userdata('id');
      $user = $this->admin_model->user($id);

      if(password_verify($this->input->post('old_password', true), $user->password)){
          if ($this->input->post('new-password', true) == $this->input->post('confirm-password', true)) {
              $data=array(
                  'password' => hash_password($this->input->post('new-password', true))
              );
              //$data = $this->security->xss_clean($data);
              $this->admin_model->edit($id,$data);
              //$this->session->set_flashdata('message', 'Mot de passe mis à jour');
              echo 'ok';
          } else {
            //$this->session->set_flashdata('message', 'Les deux mots de passe ne sont pas conforme');
            echo 'no passe';
          }
      } else {
        //$this->session->set_flashdata('message', 'Mot de passe mis à jour');
        echo 'fatal erro';
      }
      
  }

}


  public function admins(){

    $admins  = $this->admin_model->get_all_admins();
    $data = array();
    $data['admins'] = $admins;
    $data['page_title'] ='Gestion des Administrateurs';
    $data['main_content'] = $this->load->view('admin/admin', $data, TRUE);
    $this->load->view('admin/index', $data);

  }

  public function archiver($id){
    if ($this->admin_model->archiver($id)){
      $this->session->set_flashdata('sucesse', 'Utilisateur archiver avec success');
      return('admin/dashboard/admins');
    }
    else{
      $this->session->set_flashdata('error', 'Erreur, merci de réesayer');
      return('admin/dashboard/admins');
    }
    

  }

  public function unarchive($id){
    if ($this->admin_model->unarchive($id)){
      $this->session->set_flashdata('sucesse', 'Utilisateur desarchiver avec success');
      return('admin/dashboard/admins');
    }
    else{
      $this->session->set_flashdata('error', 'Erreur, merci de réesayer');
      return('admin/dashboard/admins');
    }
    
  }

  public function edit_user(){
    
    
    if ($_POST) {
      
      $id = $this->input->post('id', true);
      $data = array(
          'nom' =>$this->input->post('nom', true),
          'prenom' => $this->input->post('prenom', true),
          'email' => $this->input->post('email', true),
          'phone' => $this->input->post('phone', true),
          'adresse' => $this->input->post('adresse', true)

      );
      

      if ($this->admin_model->edit($id,$data) == true) {
        echo 'ok oh ';
        die;
        $this->session->set_flashdata('sucesse', 'Information mis à jour avec success');
        return('admin/dashboard/admins');
      }
      else{
        echo 'not ok oh';
        die;
        $this->session->set_flashdata('error', 'Erreur, merci de réessayer');
        return('admin/dashboard/admins');
      }
    }
  }


  public function view($id){
    $user = $this->admin_model->get_user($id);
    $data = array();
    $data['user'] = $user;
    $data['page_title'] = $user->nom .' '. $user->prenom ;
    $data['main_content'] =  $this->load->view('admin/view', $data, TRUE);
    $this->load->view('admin/index', $data);

  }

  public function doctors(){

    $admins  = $this->admin_model->doctor();
    $data = array();
    $data['admins'] = $admins;
    $data['page_title'] ='Gestion des Médecins';
    $data['main_content'] = $this->load->view('admin/medecins', $data, TRUE);
    $this->load->view('admin/index', $data);
  }

  public function secretaires(){

    $admins  = $this->admin_model->secretaries();
    $data = array();
    $data['admins'] = $admins;
    $data['page_title'] ='Gestion des Médecins';
    $data['main_content'] = $this->load->view('admin/secretaires', $data, TRUE);
    $this->load->view('admin/index', $data);
  }
}




/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */