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
    $data['main_content'] = $this->load->view('secretaires/dashboard', $data, TRUE);
    $this->load->view('secretaires/index', $data);
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
    $this->load->view('secretaires/index', $data);
  }

  public function patients(){

    $patients = $this->secretaires_model->patients();
   
    $data['patients'] = $patients;
    $data['page_title'] = 'Vos patients';
    $data['main_content'] = $this->load->view('secretaires/patients', $data, TRUE);
    $this->load->view('secretaires/index', $data);

  }
  public function avenir(){
    $demandes = $this->secretaires_model->get_confirme();
    $data = array();
  
    $data['demandes'] = $demandes;
    $data['page_title'] = 'Vos demandes en attente';
    $data['main_content'] = $this->load->view('secretaires/avenir', $data, TRUE);
    $this->load->view('secretaires/index', $data);

  }


  public function demandes(){

    $demandes = $this->secretaires_model->get_no_confirme();
    $data = array();
  
    $data['demandes'] = $demandes;
    $data['page_title'] = 'Vos demandes en attente';
    $data['main_content'] = $this->load->view('secretaires/demandes', $data, TRUE);
    $this->load->view('secretaires/index', $data);

  }
  public function mycompte(){

    $data =array();
    $user = $this->admin_model->user($this->session->userdata('id'));
    $data['user']  = $user;
    $data['page_tile'] = 'Détail de votre compte';
    $data['main_content'] =  $this->load->view('secretaires/myaccount', $data, TRUE);
    $this->load->view('secretaires/index', $data);
  }

  public function confirmer($id){
    $patients = $this->general_model->get_app_patient($id);
   
    $data =array(
      "status" => 1,
    );
    $return = $this->general_model->edit_option($data, $id,'appointements',);
    if ($return =="ok") {
      # code... // Envoie email de confirmation. 
    $data1['email_to'] = $patients->email;
    $data1['subject'] = $patients->nom. ' '.$patients->prenom.' Votre demande à été accepté par votre medécin';
    $data1['logo'] = base_url('assets/img/logo.png');
    //$data1['owner_email'] = $this->session->userdata('nom');
    $data1['nom'] =  $patients->nom;
    $data1['prenom'] = $patients->prenom;
    $data1['email'] = $patients->email;
    $data1['code'] = $patients->code;
    $data1['html_content'] = $this->load->view('email_template/confirm_appointement', $data1, true);
    $send = $this->email_model->send_the_email($data1['email_to'], $data1['subject'], $data1['html_content']);
    if ($send == true) {
      $this->session->set_flashdata('sucess', "Consultation confirmée");
      redirect('secretaires/dashboard/demandes');
    }
    else {
      $this->session->set_flashdata('warning', "Consultation confirmée mais le patient n'a pas reçu la confirmation");
      redirect('secretaires/dashboard/demandes');
        }
    }else {
      # code...
      $this->session->set_flashdata('error', "Une erreur dans l'exécution. Réessayer svp.");
      redirect('secretaires/dashboard/demandes');
    }
    
    }

    public function cancel($id){

      $patients = $this->general_model->get_app_patient($id);
   
      $data =array(
        "status" => 2,
      );
      $return = $this->general_model->edit_option($data, $id,'appointements',);
      if ($return =="ok") {
        # code... // Envoie email de confirmation. 
      $data1['email_to'] = $patients->email;
      $data1['subject'] = $patients->nom. ' '.$patients->prenom.' Votre demande à été refusé par votre medécin';
      $data1['logo'] = base_url('assets/img/logo.png');
      //$data1['owner_email'] = $this->session->userdata('nom');
      $data1['nom'] =  $patients->nom;
      $data1['prenom'] = $patients->prenom;
      $data1['email'] = $patients->email;
      $data1['code'] = $patients->code;
      $data1['html_content'] = $this->load->view('email_template/cancel_appointement', $data1, true);
      $send = $this->email_model->send_the_email($data1['email_to'], $data1['subject'], $data1['html_content']);
      if ($send == true) {
        $this->session->set_flashdata('sucess', "Consultation Annulée");
        redirect('secretaires/dashboard/demandes');
      }
      else {
        $this->session->set_flashdata('warning', "Annulatiin effectuée mais le patient n'a pas reçu la confirmation");
        redirect('secretaires/dashboard/demandes');
          }
      }else {
        # code...
        $this->session->set_flashdata('error', "Une erreur dans l'exécution. Réessayer svp.");
        redirect('secretaires/dashboard/demandes');
      }

    }


    public function cancelAfter(){
      
      $raison  =$_POST['raison'];
      $id = $_POST['id'];

      $patients = $this->general_model->get_app_patient($id);
   
      $data =array(
        "status" => 2,
      );
      $return = $this->general_model->edit_option($data, $id,'appointements',);
      if ($return =="ok") {
        # code... // Envoie email de confirmation. 
      $data1['email_to'] = $patients->email;
      $data1['subject'] = $patients->nom. ' '.$patients->prenom.' Votre demande à été refusé par votre medécin';
      $data1['logo'] = base_url('assets/img/logo.png');
      //$data1['owner_email'] = $this->session->userdata('nom');
      $data1['nom'] =  $patients->nom;
      $data1['prenom'] = $patients->prenom;
      $data1['email'] = $patients->email;
      $data1['code'] = $patients->code;
      $data1['raison'] = $raison;
      $data1['date'] =$patients->date;
      $data1['html_content'] = $this->load->view('email_template/cancel_appointement', $data1, true);
      $send = $this->email_model->send_the_email($data1['email_to'], $data1['subject'], $data1['html_content']);
      if ($send == true) {
        $this->session->set_flashdata('sucess', "Consultation Annulée");
        redirect('secretaires/dashboard/avenir');
      }
      else {
        $this->session->set_flashdata('warning', "Annulatiin effectuée mais le patient n'a pas reçu la confirmation");
        redirect('secretaires/dashboard/avenir');
          }
      }else {
        # code...
        $this->session->set_flashdata('error', "Une erreur dans l'exécution. Réessayer svp.");
        redirect('secretaires/dashboard/avenir');
      }

    }

    public function add(){

    $data = array();
    $med = $this->secretaires_model->get_all_medecins();
    $patients=  $this->secretaires_model->get_all_patients();
    $data['medecins'] = $med;
    $data['patients'] = $patients;
   
    $data['page_title'] = 'Planifier un nouveau rendez-vous';
    $data['main_content'] = $this->load->view('secretaires/add', $data, TRUE);
    $this->load->view('secretaires/index', $data);
    }

    public function add_app(){
        var_dump($_POST);
        die;
      if ($_POST) {
        # code...
        $data = array(
          "nom" => $this->input->post('nom', true),
          "prenom"=> $this->input->post('prenom', true),
          "email"=>$this->input->post('email', true),
          "phone"=>$this->input->post('phone', true),
        );
        $id = $this->admin_model-> insert($data, 'patients');
        $data2 = array(
          'date'=>$this->input->post('date', true),
          'idPatient'=> $id,
          'idMedecin'=> $this->input->post('docs'),
          'status'=> 1
        );
       
        $idi = $this->admin_model-> insert($data2, 'appointements');

        if (!empty($idi)) {
          # code...

          $this->session->set_flashdata('sucess', 'Rendez-vous ajouter avec succès.');
          redirect('secretaires/dashboard/avenir');
        }
        else {
          # code...
          $this->session->set_flashdata('error', "Une erreur dans l'exécution. Réessayer svp.");
          redirect('secretaires/dashboard/avenir');
        }
  
      }
    }


    public function addnewapp(){

      if ($_POST) {
        # code...
        $data2 = array(
          'date'=>$this->input->post('date', true),
          'idPatient'=> $this->input->post('idPatient', true),
          'idMedecin'=> $this->input->post('docs'),
          'status'=> 1
        );
        $idi = $this->admin_model-> insert($data2, 'appointements');

        if (!empty($idi)) {
          # code...

          $this->session->set_flashdata('sucess', 'Rendez-vous ajouter avec succès.');
          redirect('secretaires/dashboard/avenir');
        }
        else {
          # code...
          $this->session->set_flashdata('error', "Une erreur dans l'exécution. Réessayer svp.");
          redirect('secretaires/dashboard/avenir');
        }
  
      }
    }

    public function end(){

    $demandes = $this->secretaires_model->get_end();
    $data = array();
  
    $data['demandes'] = $demandes;
    $data['page_title'] = 'Vos demandes en attente';
    $data['main_content'] = $this->load->view('secretaires/end', $data, TRUE);
    $this->load->view('secretaires/index', $data);


    }
    
   
  


}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */