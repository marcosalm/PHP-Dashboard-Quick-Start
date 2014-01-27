<?php
Class Field extends MY_Model
{
  public $validate = array(
    array( 'field' => 'field_name', 'label' => 'Name', 'rules' => 'trim|required|xss_clean'), 
  );
}
?>
