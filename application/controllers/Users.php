<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function signin() {
		$this->load->model('User');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->User->get_user_by_email($email);
		if(password_verify($password, $user['password'])) {
			$user_data = array(
				'user_id' => $user['id'],
				'is_logged_in' => true
			);
			$this->session->set_userdata($user_data);
			#redirect to home page
			// redirect('/users/show/'.$user['id']);

			redirect ('/users_listings/'.$user['id']);

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
			redirect('/users/show/'.$id);
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
					$this->session->set_flashdata('edit_errors', array("Invalid password!"));
					redirect("/users/edit/" . $this->session->userdata('user_id'));
				}
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect("/");
	}

	function do_upload()
	{
		$config['upload_path'] = './assets/images/users';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('users/edit/'.$this->session->userdata('user_id'), $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}

	public function change_profile_picture() {
		if($this->session->userdata('is_logged_in')) {
			$this->load->view('/users/profile_picture_page');
		} else {
			show_404();
		}
	}

	public function login_reg_page(){
		$this->load->view('users/login_reg_page');
	}

	public function users_listings($id)
	{
		$this->load->model('user');
		$results = $this->user->active_per_user($id);

		$this->load->view('users/show', array('past_item' => $results));
	}

}