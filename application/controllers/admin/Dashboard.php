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
    $users = $this->admin_model->get_all_users();
    $data = array();
    $data['users'] = $users;
    $data['nb_doc'] = $this->admin_model->count('medecin');
    $data['nb_sec'] = $this->admin_model->count('secretaire');
    $data['nb_admin'] = $this->admin_model->count('admin');
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
      $this->session->set_flashdata('sucess', 'Utilisateur archiver avec success');
      redirect('admin/dashboard/');
    }
    else{
      $this->session->set_flashdata('error', 'Erreur, merci de réesayer');
      redirect('admin/dashboard/');
    }
    

  }

  public function unarchive($id){
    if ($this->admin_model->unarchive($id)){
      $this->session->set_flashdata('sucess', 'Utilisateur desarchiver avec success');
      redirect('admin/dashboard/');
    }
    else{
      $this->session->set_flashdata('error', 'Erreur, merci de réesayer');
      redirect('admin/dashboard/');
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
          'adresse' => $this->input->post('adresse', true),
          'idDep' => $this->input->post('idDep', true),

      );


      if ($this->admin_model->edit($id,$data) == true) {
        
        $this->session->set_flashdata('sucess', 'Information mis à jour avec success');
        redirect('admin/dashboard/');
      }
      else{
        
        $this->session->set_flashdata('error', 'Erreur, merci de réessayer');
        redirect('admin/dashboard/');
      }
    }
  }


  public function view($id){
    $user = $this->admin_model->get_user($id);
    $deps = $this->admin_model->get_all_dep();
    $data = array();
    $data['user'] = $user;
    $data['deps'] = $deps;
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

  public function config(){
    $data = array();
    $setting=get_settings();
    $data['setting'] = $setting;
    $data['page_title'] ='Configurer votre cabinet';
    $data['main_content'] = $this->load->view('admin/config', $data, TRUE);
    $this->load->view('admin/index', $data);
  }

  public function add_config(){
    if ($_POST) {
      $return = $this->general_model->do_upload_img();
      if ($return !==NULL) {
        # code...
        $data = array(
          'nom'=> $this->input->post('nom', true),
          'description'=> $this->input->post('description', true),
          'adresse'=> $this->input->post('adresse', true),
          'teleĥone1'=> $this->input->post('teleĥone1', true),
          'telephone2'=> $this->input->post('telephone2', true),
          'pays'=> $this->input->post('pays', true),
          'ville'=> $this->input->post('ville', true),
          'logo'=>$return['upload_data']['orig_name']
        );
       
        $result = $this->admin_model-> insert($data, 'settings');
        if ($result !=NULL) {
          # code...
          $this->session->set_flashdata('sucess', "Disponibilité ajouté");
          redirect('admins/dashboard/config');
         }
         else {
          $this->session->set_flashdata('error', "Une erreur est subvenue. Merci d'essayer à nouveau");
          redirect('admins/dashboard/config');
         }
      }
     
    }
  }

  public function edit_config(){
    if ($_POST) {
      $return = $this->general_model->do_upload_img();
      if ($return !==NULL) {
        # code...
        $data = array(
          'nom'=> $this->input->post('nom', true),
          'description'=> $this->input->post('description', true),
          'adresse'=> $this->input->post('adresse', true),
          'teleĥone1'=> $this->input->post('teleĥone1', true),
          'telephone2'=> $this->input->post('telephone2', true),
          'pays'=> $this->input->post('pays', true),
          'ville'=> $this->input->post('ville', true),
          'logo'=>"uploads/images/".$return['upload_data']['orig_name']
        );
       
        $result = $this->general_model-> edit_option($data,1,'settings');
        if ($result !=NULL) {
          # code...
          $this->session->set_flashdata('sucess', "Mise à jour effectuée");
          redirect('admins/dashboard/config');
         }
         else {
          $this->session->set_flashdata('error', "Une erreur est subvenue. Merci d'essayer à nouveau");
          redirect('admins/dashboard/config');
         }
      }
     
    }

  }
}




/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */