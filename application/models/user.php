<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function validate($data) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[8]|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required');
		if($this->form_validation->run()){
			return true;
		} else {
			return false; 
		}
	}	
}
