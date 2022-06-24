<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

        public function __contruct(){
            parent::__contruct();
            if($this->session->userdata('id')){
                redirect();
        }

    }
        function index(){
            $this->load->view('register');
        }
   
        function validation(){
            //var_dump($_POST);
            //die;
           
           $this->form_validation->set_rules('nom', 'Nom', 'required' );
           $this->form_validation->set_rules('prenom', 'Prénoms', 'required' );
           $this->form_validation->set_rules('email', 'Email', 'required|valid_email' );
           $this->form_validation->set_rules('role', 'Role', 'required');
           
            
           if($this->form_validation->run()){
              
               $verification_key = md5(rand());
               $data = array(
                    'nom'=> $this->input->post('nom'),
                    'prenom' => $this->input->post('prenom'),
                    //'password' => $encrypted_password,
                    'email'=> $this->input->post('email'),
                    'role' => $this->input->post('role'),
                    'createBy' => $this->input->post('createBy'),
                    //'createDate' => mdate(),
                    //'updateDate' =>time() ,
                    'verification_key' => $verification_key,
                    'createBy' => $this->input->post('user_id'), 
               );
              
               $id = $this->register_model->insert($data, 'users');
               if($id>0){
               
                $data1['email_to'] = $this->input->post('email');
                $data1['subject'] = $this->session->userdata('nom'). ' '.$this->session->userdata('prenom').'Vous invite à rejoindre MedicalApp';
                $data1['id'] = $id;
                $data1['verification_key'] = $id;
                $data1['logo'] = base_url('assets/img/logo.png');
                $data1['info_logo'] = base_url('assets/img/user.png');
                $data1['owner_email'] = $this->session->userdata('nom');
                $data1['nom'] = $this->session->userdata('nom');
                $data1['prenom'] = $this->session->userdata('prenom');
                $data1['email'] = $this->session->userdata('email');
                $data1['html_content'] = $this->load->view('email_template/invitation', $data1, true);
                $send = $this->email_model->send_the_email($data1['email_to'], $data1['subject'], $data1['html_content']);
                //$subject = "Please verify email for login";
                //$message = "
                //<p>Hi ".$this->input->post('user_name')."</p>
                //<p>This is email verification mail from Codeigniter Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."register/verify_email/?ver=".$verification_key."&id=".$id."'>link</a>.</p>
                //<p>Once you click this link your email will be verified and you can login into system.</p>
                //<p>Thanks,</p>
                //";
                //$send = $this->email_model->send_the_email($this->input->post('email'),$subject, $message);
                
                //var_dump($this->email->send());
                
                if($send == true)
                {
                    
                 $this->session->set_flashdata('message', "Utilisateur ajouté. Un mail d'invitation a été envoyé");
                 redirect('admin/dashboard/');
                }else{
                    $this->session->set_flashdata('error', "Mail d'invitation non envoyé.");
                    redirect('admin/dashboard/add');
                }
                   }
                   else{
                    redirect('admin/dashboard/add');
                   }

               

           }
           else {
               echo 'non non';
           }
        
        }
        
        function verify_email(){
            //$user_id = $this->uri->segment(5);
            //$verification_key = $this->uri->segment(4);
            $user_id = $_GET ['id'];
            $verification_key = $_GET['ver'];
            $user = $this->general_model->get_user($user_id);

           //var_dump($user->nom);
            //die;
            $data1=array(
                'is_email_verified' =>'yes'
            );
            $this->general_model->edit_option($data,$user_id,'users');
            $data ['id'] = $user_id;
            $data['nom']= $user->nom;
            $data['prenom'] = $user->prenom;
            $data['email'] = $user->email;
            $this->load->view('complete_registration', $data);

            /*
            if($verification_key != NULL){
                //$verification_key = $this->uri->segment(4);
                
                if($this->register_model->verify_email($verification_key)){
                    //$this->session->set_flashdata('message', 'Email verifier');
                    
                    //redirect('Register/next/', $data);
                    //redirect('confirm_registration', $data);
                    //$data['message'] = '<h1 aligne="center"> </h1>';
                    
                }
                else {
                    $data['message'] = '<h1 align="center"> Lien invalide</h1>';
                }
                //$this->load->view('email_verification', $data);
            }
            */
        }

        function next(){
            $user_id = $this->input->get('user_id');
            $this->load->view('complete_registration', $user_id);
        }

        function complet_registration(){
            $user_id = $_POST['user_id'];
            $this->form_validation->set_rules('password', 'Mot de Passe', 'required|matches[password_confirm]');
            $this->form_validation->set_rules('phone', 'Téléphone', 'required');
            $this->form_validation->set_rules('password_confirm', 'Confirmer le Mot de Passe', 'required|matches[password]');
            if($this->form_validation->run()){
               $encrypted_password = hash_password($this->input->post('password'));
               $data = array(
                    'password' => $encrypted_password,
                    'phone' => $this->input->post('phone'),
                    'adresse' => $this->input->post('adresse'),
                    'statut' => 1,
                    //'lastLogin' => time(),
                    //'updateDate' => time(),        
                );
                
                $this->register_model->account_complete($data,$user_id);
                redirect('Login');
            }

        }


    




}