<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function signin() {

	}

	public function create() {
		$data = $this->input->post();
		if(!$this->User->validate($data)) {
			//set errors
		} else {
			//add the user
		}
	}

	public function login_reg_page(){
		$this->load->view('users/login_reg_page');
	}


}
