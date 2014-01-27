<?php
function check_login_status() {
	$obj =& get_instance();

   if($obj->session->userdata('logged_in'))
   {
     $session_data = $obj->session->userdata('logged_in');
     $obj->data['user'] = $obj->user->get_by('username',$session_data['username']);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
}