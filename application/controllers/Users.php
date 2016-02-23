<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function signin() {
		$this->load->model('User');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->User->get_user_by_email($email);
		
		if(password_verify($password, $user['password'])) {
			$user = array(
				'user_id' => $user['id'],
				'is_logged_in' => true
			);
			$this->session->set_userdata($user);
			#redirect to home page
			redirect('/');
		} else {
			//set errors
			$this->session->set_flashdata('login_errors', "Invalid email or password!");
			redirect("/login");
		}
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
			$user = array(
				'user_id' => $id,
				'is_logged_in' => true
			);
			$this->session->set_userdata($user);
			#redirect to home page
			redirect('/');
		}
	}

	public function show($id){
		$this->load->model('User');
		$user = $this->User->get_user_by_id($id);
		//get active listings
		//get inactive listings
		$this->load->view('users/show', array('user' => $user));

	}
	public function edit($id){
		if($id != $this->session->userdata('user_id')) {
			show_404();
		} else {
			$this->load->model('User');
			$user = $this->User->get_user_by_id($id);
			$user['id'] = $id;
			$this->load->view('users/edit', array('user' => $user));
		}
	}

	public function update() {
		$data = $this->input->post();
		if($data['id'] != $this->session->userdata('user_id')) {
			show_404();
		} else {
			$this->load->model('User');
			$user = $this->User->get_user_by_id($this->session->userdata('user_id'));
			if (!$this->User->update_validate($data)) {
				//set errors
				$errors = array(validation_errors());
				$this->session->set_flashdata('edit_errors', $errors);
				redirect("/users/edit/" . $this->session->userdata('user_id'));
			} else {
				//edit the user
				if (password_verify($data['password'], $user['password'])) {
					$data += array('user_id' => $this->session->userdata('user_id'));
					$this->User->update_user($data);
					#redirect to home page
					redirect("/users/show/" . $this->session->userdata('user_id'));
				} else {
					//set errors
					$this->session->set_flashdata('edit_errors', "Invalid password!");
					redirect("/users/edit/" . $this->session->userdata('user_id'));
				}
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect("/");
	}

	public function login_reg_page(){
		$this->load->view('users/login_reg_page');
	}


}
