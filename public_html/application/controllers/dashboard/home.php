<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends MY_Controller {

 function __construct()
 {
   parent::__construct();
   check_login_status();
 }

 function index()
 {
   
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('/', 'refresh');
 }

}

?>
