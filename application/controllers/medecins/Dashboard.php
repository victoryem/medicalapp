<?php
defined('BASEPATH') or exit('No direct script access allowed');


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
    $data['main_content'] = $this->load->view('medecins/dashboard', $data, TRUE);
    $this->load->view('medecins/index', $data);
  }

  public function demandes(){

    $demandes = $this->medecin_model->get_no_confirme();
    $data = array();
    $data['demandes'] = $demandes;
    $data['page_title'] = 'Vos demandes en attente';
    $data['main_content'] = $this->load->view('medecins/demandes', $data, TRUE);
    $this->load->view('medecins/index', $data);

  }

  public function patients(){

    $patients = $this->medecin_model->patients();
   
    $data['patients'] = $patients;
    $data['page_title'] = 'Vos patients';
    $data['main_content'] = $this->load->view('medecins/patients', $data, TRUE);
    $this->load->view('medecins/index', $data);

  }

  public function edit_patient(){

      $data =array(
        "nom" => $this->input->post('nom', true),
        "prenom"=> $this->input->post('prenom', true),
        "email"=>$this->input->post('email', true),
        "phone"=>$this->input->post('phone', true),
        "adresse"=>$this->input->post('adresse', true),
        "poids"=>$this->input->post('poids', true),
        "sexe"=>$this->input->post('sexe', true),
        "taille"=>$this->input->post('taille', true),
        "date_de_naissance"=>$this->input->post('date_de_naissance', true),
    );
    $id =$this->input->post('id', true);
    $this->medecin_model->edit_patient($data, $id);
    redirect('medecins/dashboard/patient/'.$id);
  }


  
  public function patient($id){
    $idDoc = $this->session->userdata('id');
    $patient = $this->medecin_model->get_patient($id);
    $ordonnances = $this->medecin_model->get_ordonnance($id, $idDoc);
    $documents = $this->medecin_model->get_document($id, $idDoc);
    $consultations =  $this->medecin_model->get_all_patient_app($id, $idDoc);
    

    $data['patient'] = $patient;
    $data['ordonnances'] = $ordonnances;
    $data['documents'] = $documents;
    $data['consultations'] = $consultations;
    $data['page_title'] = 'Détails du patient';
    $data['main_content'] = $this->load->view('medecins/patient', $data, TRUE);
    $this->load->view('medecins/index', $data);
    
  }

  public function pharma(){

    $medicaments = $this->general_model->get_all_medicament();
    $formes = $this->general_model->get_forms();
    $categories = $this->general_model->get_categorie();
    


    $data = array();
    $data['medicaments'] = $medicaments;
    $data['formes'] =$formes;
    $data['categories'] = $categories;
    $data['page_title'] = 'La pharmacie';
    $data['main_content'] = $this->load->view('pharmacie/pharmacie', $data, TRUE);
    $this->load->view('medecins/index', $data);
  }

  public function mycompte(){

    $data =array();
    $user = $this->admin_model->user($this->session->userdata('id'));
    $data['user']  = $user;
    $data['page_tile'] = 'Détail de votre compte';
    $data['main_content'] =  $this->load->view('medecins/myaccount', $data, TRUE);
    $this->load->view('medecins/index', $data);
  }


  public function add_doc(){


    if ($_POST) {
      
      $return = $this->general_model->do_upload_file();

        if ($return !=='error') {
          # code...
          $shareId = uniqid();
        if ($this->input->post('patientView', true) == 'on') {
          # code...
          $patientView = 1;
        }
        else{
          $patientView =0;
        }
        $data =array(
            'shareId' => $shareId,
            'idPatient'=> $this->input->post('idPatient', true),
            'idDoc'=>$this->input->post('idDoc', true),
            'patientView'=>$patientView,
            'type'=> $this->input->post('type', true),
            'urlDoc'=>"uploads/files/".$return['upload_data']['raw_name'].".pdf"
        );
        $id = $this->general_model->insert($data, 'documents');
        if (!empty($id)) {
          # code...
          redirect('medecins/dashboard/patients/'.$this->input->post('idDoc', true));
        }
        //var_dump($data);
        }
        
    }

  }

  public function add_cachet(){     
      $return = $this->general_model->do_upload_img();
     
        if ($return !=='error') {
          
        $data =array(
            'cachet' => $return['upload_data']['orig_name']
        );
        $id = $this->session->userdata('id');
        
        if ($this->general_model->edit_option($data, $id, 'users')) {
          # code...
          redirect('medecins/dashboard/mycompte');
        }
        //var_dump($data);
        }
  }


  public function add_sign(){     
    $return = $this->general_model->do_upload_img();
      if ($return !=='error') {
        
      $data =array(
          'signature' => $return['upload_data']['orig_name']
      );
      $id = $this->session->userdata('id');
      
      if ($this->general_model->edit_option($data, $id, 'users') == 'ok') {
        # code...
        redirect('medecins/dashboard/mycompte');
      }
      //var_dump($data);
      }
}



}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */