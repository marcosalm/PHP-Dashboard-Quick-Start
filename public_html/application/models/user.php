<?php
Class User extends MY_Model
{
  public $validate = array(
    array( 'field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|xss_clean'), 
    array( 'field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|xss_clean|callback_check_database'), 
  );

 function login($username, $password) {
   $this -> db -> select('id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>
