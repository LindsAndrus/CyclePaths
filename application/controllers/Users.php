<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function signin() {

	}

	public function create() {

	}

	public function login_reg_page(){
		$this->load->view('users/login_reg_page');
	}


}
