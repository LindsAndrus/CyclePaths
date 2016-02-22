<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function signin() {

	}

	public function create() {
		$this->load->model('User');
		$data = $this->input->post();
		if(!$this->User->validate($data)) {
			//set errors
			$errors = array(validation_errors()); 
			$this->session->set_flashdata('registration_errors', $errors);
			redirect("/login");
		} else {
			//add the user
			$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
			$id = $this->User->create_user($data);
			$user array(
				'user_id' => $id,
				'is_logged_in' => true
			);
			$this->session->set_userdata($user);
			#redirect to home page
			redirect('/');
		}
	}

	public function login_reg_page(){
		$this->load->view('users/login_reg_page');
	}


}
