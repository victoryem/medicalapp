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

// ------------------------------------------------------------------------

/* End of file Custom_helper.php */
/* Location: ./application/helpers/Custom_helper.php */