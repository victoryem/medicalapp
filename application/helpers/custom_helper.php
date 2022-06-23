<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Helpers Custom_helper
 *
 * This Helpers for ...
 * 
 * @package   CodeIgniter
 * @category  Helpers
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 *
 */

// ------------------------------------------------------------------------

if (!function_exists('test')) {
  /**
   * Test
   *
   * This test helpers
   *
   * @param   ...
   * @return  ...
   */
  function test()
  {
    // 
  }
}

if (!function_exists('current_date')){
    function current_date(){
      // Set the new timezone
        date_default_timezone_set('Africa/Porto-Novo');
        $date = date('d-m-y h:i:s');
        return $date;
    }
}

if (!function_exists('hash_password')) {
  function hash_password($password)
  {	
    $ci =& get_instance();
      return password_hash($password, PASSWORD_BCRYPT);
  }
}

if (!function_exists('user_role')) {
  # code...
  function user_role($user_id){
    $role = $this->general_model->get_user_role($user_id);
    return $role;
  }
}

if (!function_exists('get_mois_str')) {
  # code...

  function get_mois_str($date){

    $datetime = new \DateTime($date);
    $mois = $datetime->format('m');

    if ($mois == "01" ) {
      # code...
      return 'Jan';
    }
    elseif ($mois == "02") {
      # code...
      return 'Fév';
    }
    elseif ($mois == "03") {
      # code...
      return 'Mar';
    }
    elseif ($mois == "04") {
      # code...
      return 'Avr';
    }
    elseif ($mois == "05") {
      # code...
      return 'Mai';
    }
    elseif ($mois == "06") {
      # code...
      return 'Jui';
    }

    elseif ($mois == "07") {
      # code...
      return 'Juil';
    }
    elseif ($mois == "08") {
      # code...
      return 'Aou';
    }
    elseif ($mois == "09") {
      # code...
      return 'Sep';
    }

    elseif ($mois == "10") {
      # code...
      return '0ct';
    }
    elseif ($mois == "11") {
      # code...
      return 'Sep';
    }
    elseif ($mois == "12") {
      # code...
      return 'Dec';
    }
    else{
      return 'N/A';
    }
/*
    switch ($mois) {
      case "O1":
          //return 'Jan';
        break;
      case "O2":
        //return 'Fev';
        break;
      case "O3":
          //return 'Mar';
        break;
      case "04":
          //return 'Avr';
        break;
      case "O5":
          //return 'Mai';
        break;
       case "O6":
          //return 'Jui';
        var_dump('juin');
        break;
      case "O7":
          //return 'Juil';
        break;
      case "08":
          //return 'Aou';
        break;
      case "O9":              
          //return 'Sep';
        break;
      case "10":
          //return 'Oct';
        break;
      case "11":
          //return 'Nov';
        break;
      case "12":
          //return 'Déc';
        break;
      default:
          //return 'N/A';
        var_dump('juin1');
        break;
    }
    */

  }
}


if (!function_exists('get_day')) {
  # code...
  function get_day($date){
    $datetime = new \DateTime($date);
    $day = $datetime->format('d');
    return $day;
  }
}

if (!function_exists('get_hours')) {
  # code...
  function get_hours($date){
    $datetime = new \DateTime($date);
    $hours = $datetime->format('h:i');
    return $hours;
  }

  if (!function_exists('now')) {
    # code...
    function now(){
      $datetime = new \DateTime('now');
      $hours = $datetime->format('y-m-d h:i-s');
      return $hours;
    }
  }

  if (!function_exists('today')) {
    # code...
    function today(){
      $datetime = new \DateTime('now');
      $date = $datetime->format('Y-m-d');
      return $date;
    }
  }

  if (!function_exists('get_settings')) {
    # code...
    function get_settings(){
      $ci = get_instance();
      $ci->load->model('general_model');
      $settings  = $ci->general_model->get_settings();
      return $settings;
    }
  }

  if (!function_exists('check_available')) {
    # code...
    function check_available($doc,$date){
      $ci = get_instance();
      $ci->load->model('general_model');
      $availables = $ci->general_model->get_doc_dispo($doc);
     // echo $date;
      //var_dump($availables);
      foreach ($availables as $availabe) {
        # code...
        if ($date == $availabe->date) {
          echo   ' trouvé';
        }
        else {
          # code...
          echo   ' non trouvé';
        }
        
      }
    }
  }
  
}

// ------------------------------------------------------------------------

/* End of file Custom_helper.php */
/* Location: ./application/helpers/Custom_helper.php */