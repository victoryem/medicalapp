<?php

class General_model extends CI_Model{
    
    function get_user($user_id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $query = $this->db->get();
        $query = $query->row();
        return $query;
    }

    function get_user_role($user_id){
        $this->db->select('role');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $query = $this->db->get();
        $query = $query->row();
        return $query;
    }

    function add_log($data){
        $this->db->insert('logs', $data);
        return $this->db->insert_id();
    }

    function insert($data, $table){
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function get_log($id){
        

    }

    function get_all_log(){

    }

    function get_dep_doctors($dep){
        $this->db->select('u.nom as nom, u.prenom as prenom, u.id as id');
         $this->db->from('users u');
         $this->db->join('medecins m', 'm.user_id  = u.id', 'LEFT');
         $this->db->where('m.idDep', $dep);
         $query = $this->db->get();
         $query = $query->row();  
         return $query;
    }

    function get_all_medicament(){
        $this->db->select('f.libForme as libForme, c.libCategorie as libCategorie, m.id as id, m.nom as nom');
        $this->db->from('form_medicament f');
        $this->db->join('medicaments m', 'm.idForm  = f.id');
        //$this->db->from('categorie_medicament c');
        $this->db->join('categorie_medicament c', 'm.idCat = c.id');
        $query = $this->db->get();
        $query = $query->result();  
        return $query;
    }

    function get_forms(){

        $this->db->select('*');
        $this->db->from('form_medicament');
        $query = $this->db->get();
        $query = $query->result();
        return $query;
    }

    function get_categorie(){
        $this->db->select('*');
        $this->db->from('categorie_medicament');
        $query = $this->db->get();
        $query = $query->result();
        return $query;

    }

    function del($id, $table){
        $this->db->delete($table, array('id' => $id));
        return 'ok';
      }
          // edit function
    function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return 'ok';
    } 



      function do_upload_file(){

        $config['upload_path']          = './uploads/files';
        $config['allowed_types']        = 'pdf';
        $config['encrypt_name']         = TRUE;
    

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());

               // $this->load->view('upload_form', $error);
               return $error;
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                //$this->load->view('upload_success', $data);
                return $data;
        }
    }


    function do_upload_img(){

        $config['upload_path']          = './uploads/images';
        $config['allowed_types']        = 'png';
        $config['encrypt_name']         = FALSE;
        $config['remove_spaces']        = TRUE;
    

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('file'))
        {
                $error = array('error' => $this->upload->display_errors());

               // $this->load->view('upload_form', $error);
               return $error;
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                //$this->load->view('upload_success', $data);
                return $data;
        }
    }
    
    function get_settings(){
        $this->db->select('*');
        $this->db->from('settings');
        $query = $this->db->get();
        $query = $query->row();
        return $query;
    }

    function get_app_patient($id){

        $this->db->select('p.id as id, p.nom as nom,p.prenom as prenom, p.email, a.date, p.public_id as code, a.date as date');
        $this->db->from('patients p');
        $this->db->join('appointements a', 'a.idPatient  = p.id');
        $this->db->where('a.id', $id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_doc_dispo($id){
        $this->db->select('d.date as date, i.heureDebut as heureDebut, i.heureFin as heureFin, d.id as id');
        $this->db->from('dates d');
        $this->db->join('disponibilites i', 'i.idDate  = d.id');
        $this->db->where('i.idMedecin', $id);
        $query = $this->db->get();
        $query = $query->result();  
        return $query;
    }
    
    function check_date($date, $id){
        $this->db->select('d.date as date');
        $this->db->from('dates d');
        $this->db->join('disponibilites i', 'i.idDate  = d.id');
        $this->db->where('i.idMedecin', $id);
        $this->db->where('date', $date);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            # code...
            return true;
        } 
        else {
            return false;
        }
    }
    function return_date($date, $id){
        $this->db->select('d.date as date, i.heureDebut as heureDebut, i.heureFin as heureFin');
        $this->db->from('dates d');
        $this->db->join('disponibilites i', 'i.idDate  = d.id');
        $this->db->where('i.idMedecin', $id);
        $this->db->where('date', $date);
        $query = $this->db->get();
        $query = $query->result();  
        return $query;

    }

    function get_doc_app_date($id){
        $this->db->select('date');
        $this->db->from('appointements');
        $this->db->where('idMedecin', $id);
        $query = $this->db->get();
        $query = $query->result();  
        return $query;
    }
}


function get_dep_doctors($dep){
    $this->db->select('u.nom as nom, u.prenom as prenom, u.id as id');
     $this->db->from('users u');
     $this->db->join('medecins m', 'm.user_id  = u.id', 'LEFT');
     $this->db->where('m.idDep', $dep);
     $query = $this->db->get();
     $query = $query->row();  
     return $query;
}