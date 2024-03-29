<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Ordonnances
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

class Ordonnances extends CI_Controller
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
    $data['page_title'] = 'Page de gestion des ordonnances.';
    $data['main_content'] = $this->load->view('medecins/ordonnance/all_ordonnances', $data, TRUE);
    $this->load->view('medecins/index', $data);
  }

  public function new_ordonnance($id){
    $data = array();
    $medicaments= $this->general_model->get_all_medicament();
    $patient = $this->medecin_model->get_patient($id);
    $data['patient'] = $patient;
    $data['medicaments'] =$medicaments;
    $data['settings'] = get_settings();
    $data['page_title'] = 'Créer une ordonnance.';
    $data['main_content'] = $this->load->view('medecins/ordonnance/new_ordonnance', $data, TRUE);
    $this->load->view('medecins/index', $data);
  }

  public function add_ordonnance_drug(){
     //print_r($_POST);
     //print_r($_POST['idmedoc'][1]);
     
     if ($_POST) {
      # code...
      $data =array(
        'idPatient'=>$this->input->post('idPatient', true),
        'idMedecin'=>$this->session->userdata('id')
      );
      $data = $this->security->xss_clean($data);
      $id = $this->general_model->insert($data, 'ordonnances');

      $lenght = sizeof($_POST['idmedoc']);

      for ($i=0; $i <$lenght ; $i++) { 
        # code...
        $data1 =array(
          'idMedi' =>$this->input->post('idmedoc', true)[$i],
          'idOrdon'=> $id,
          'qte'=>$this->input->post('qty', true)[$i],
          'posologie'=> $this->input->post('posologie', true)[$i],
          'commentaire'=>  $this->input->post('commentaire', true)[$i] 
        );
        $this->general_model->insert($data1, 'appartenir');
      }       
      echo 'Ordonnance ajoutée avec succès';
     }
  }

  function view_ordonnance($id){
    $patient = $this->medecin_model->get_ordonnance_patient($id);
    $medicaments = $this->medecin_model->get_ordonnance_medoc($id);
  
    $data = array();
    $data['settings'] = get_settings();
    $data['patient'] = $patient;
    $data['medicaments'] = $medicaments;
    $data['page_title'] = 'Ordonnance.';
    $data['main_content'] = $this->load->view('medecins/ordonnance/view_ordonnance', $data, TRUE);
    $this->load->view('medecins/index', $data);
  }

  function get_ordonnance_pfd($id){
    $patient = $this->medecin_model->get_ordonnance_patient($id);
    $medicaments = $this->medecin_model->get_ordonnance_medoc($id);
  
    $data = array();
    $data['settings'] = get_settings();
    $data['patient'] = $patient;
    $data['medicaments'] = $medicaments;
    $data['page_title'] = 'Ordonnance.';
    $live_mpdf = new \Mpdf\Mpdf();
    $all_html = $this->load->view('medecins/ordonnance/pdf_ordonnance',$data, true); //CodeIgniter view file name
    $live_mpdf->WriteHTML($all_html);
    $live_mpdf->Output(); // simple run and opens in browser
    $live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name
  }

}


/* End of file Ordonnances.php */
/* Location: ./application/controllers/Ordonnances.php */