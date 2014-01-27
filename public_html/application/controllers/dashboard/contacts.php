<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Contacts extends MY_Controller {

 function __construct()
 {
   parent::__construct();
   check_login_status();
 }

 function index()
 {
   
 }

}

?>
