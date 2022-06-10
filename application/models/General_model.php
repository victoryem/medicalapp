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
}