<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listings extends CI_Controller {

	// public function __construct()
	// {
	// 	parent:: __construct();
	// 	$this->load->model("listing");
	// } 

	public function index()
	{
		$this->load->view('create_listing');

	}

	public function create_item()
	{
		$this->load->model('listing');
		$this->listing->create_item(

			$this->input->post('name'),
			$this->input->post('category'),
			$this->input->post('brand'),
			$this->input->post('description'),
			$this->input->post('price')
		);

		redirect('item_page');
	}

	public function search_results()
	{

	}
}