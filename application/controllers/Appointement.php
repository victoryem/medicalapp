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
    if($_POST['send']){
      $doctors = $this->admin_model->get_dep_doctors($this->input->post('id', true));
      
      $data = array();
      $data['docs'] = $doctors;
      $data['page_title'] = 'Prener rendez vous avec votre medécin';
      $data['main_content'] = $this->load->view('appointement/step2', $data, TRUE);
      $this->load->view('appointement/index', $data);
    }
    else {
      redirect('appointement');
    }
  }


  public function add_app(){
    var_dump($_POST);
    $dispos = $this->general_model->get_doc_dispo($this->input->post('docs'));
    $dispo = $this->general_model->check_date($this->input->post('date'),$this->input->post('docs'));
    $date = $this->general_model->return_date($this->input->post('date'),$this->input->post('docs'));

    var_dump($date);
    //die;
    
    if ($_POST) {
      echo 'toto';
        $dispo = $this->general_model->check_date($this->input->post('date'),$this->input->post('docs'));
        if ($dispo==true) {
          echo 'tata';
          # code...
          $dates = $this->general_model->return_date($this->input->post('date'),$this->input->post('docs'));
          $heure= $this->input->post('heure');

          foreach ($dates as $date) {
            # code...
            echo 'titi';
            if ($date->heureDebut < $heure && $date->heureFin >= $heure) {
              # code...
              echo 'ooook';
              $guid = uniqid('MA');
              $data =array(
                  "nom" => $this->input->post('nom', true),
                  "prenom"=> $this->input->post('prenom', true),
                  "email"=>$this->input->post('email', true),
                  "phone"=>$this->input->post('phone', true),
                  "adresse"=>$this->input->post('adresse', true),
                  "public_id"=> $guid
              );
              $id = $this->admin_model-> insert($data, 'patients');
              //var_dump($data);
              $data2 = array(
                'date'=>$this->input->post('date', true),
                'heure'=>$this->input->post('heure', true),
                'idPatient'=> $id,
                'idMedecin'=> $this->input->post('docs'),
                'commentaire'=> $this->input->post('commentaire'),
                'status'=>1
              );
             
              $idi = $this->admin_model-> insert($data2, 'appointements');
        
              if (!empty($idi)) {
                $data = array();
                $data['page_title'] = 'Demande recue';
                $data['main_content'] = $this->load->view('appointement/confirmation', $data, TRUE);
                $this->load->view('appointement/index', $data);
        
                // Envoie email de reception
                        $data1['email_to'] = $this->input->post('email', true);
                        $data1['subject'] = $this->input->post('nom', true). ' '.$this->input->post('prenom', true).' Votre demande à bien été envoyé au medécin';
                        $data1['logo'] = base_url('assets/img/logo.png');
                        $data1['owner_email'] = $this->session->userdata('nom');
                        $data1['nom'] =  $this->input->post('nom', true);
                        $data1['prenom'] = $this->input->post('prenom', true);
                        $data1['email'] = $this->input->post('email', true);
                        $data1['code'] = $guid;
                        $data1['html_content'] = $this->load->view('email_template/new_appointement', $data1, true);
                        $send = $this->email_model->send_the_email($data1['email_to'], $data1['subject'], $data1['html_content']);
              }
              break ;
            }
            else {
              # code...
              echo 'sisi';
              $this->session->set_flashdata('error', "Votre docteur n'est pas disponible pour l'heure choisie");
              redirect('appointement');
              
            }
          }

        }else {
          # medecin pas disponible
          $this->session->set_flashdata('error', "Votre docteur n'est pas disponible pour la date choisie");
          redirect('appointement');
        }
        //die;
      # code...
    
    }
  }

}


/* End of file Appointement.php */
/* Location: ./application/controllers/Appointement.php */