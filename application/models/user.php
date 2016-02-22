<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	function create_user($data) {
		$query = "INSERT INTO users (first_name, last_name, email, password, created_on, updated_on) VALUES(?,?,?,?, NOW(), NOW())";
		$values = array($data['fname'], $data['lname'], $data['email'], $data['password']);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}

	function get_user_by_email($email) {
		$query = "SELECT first_name, password, email FROM users WHERE email = ?";
		$values = array($email);
		return $this->db->query($query, $values)->row_array();
	}
	function get_user_by_id($id) {
		$query = "SELECT first_name, password, email FROM users WHERE id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->row_array();
	}

	public function validate($data) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]');
       $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]');
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
