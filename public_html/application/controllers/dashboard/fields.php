<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Fields extends MY_Controller {

 function __construct()
 {
   parent::__construct();
   check_login_status();
 }

 function index()
 {
   $this->data['fields'] = $this->field->get_all();
 }

 function add() {
 	if ($this->input->post()) {
	 	$input = array(
			'field_name' => $this->input->post('field_name', TRUE),
			'created_at' => date('c')
		);
		$this->field->insert($input);
		
		//Redirect 
		if(!validation_errors()) {
			//Redirect 
			$this->session->set_success_flashdata('status', 'Field Added');
			redirect('/dashboard/fields');
		}
	}
 }

 function edit($field_id) {
 	$this->data['field'] = $this->field->get($field_id);

 	if ($input = $this->input->post()) {
	 	$input = array(
			'field_name' => $this->input->post('field_name', TRUE)
		);
		$this->field->update($field_id, $input);

		//Redirect 
		if(!validation_errors()) {
			$this->session->set_success_flashdata('status', 'Field Updated');
			redirect('/dashboard/fields');
		}
	}
 }

 function delete($field_id) {
 	//Delete User
	$this->field->delete($field_id);
	$this->session->set_error_flashdata('status', 'Field Deleted');
	redirect('/dashboard/fields'); 
 }

}

?>
