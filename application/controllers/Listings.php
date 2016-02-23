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
		$this->load->model('listing');
		$matches = $this->listing->search_results();
		// var_dump($results);
		// die();

		$this->load->view('homeii', array('matches' => $matches));

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

		redirect('/');
	}

	public function search_results($id)
	{
		$this->load->model('listing');
		$search_results = $this->listing->category_values($id);

		// var_dump(array('listings' => $search_results));
		// die();
		
		$this->load->view('listings', array('cat_results' => $search_results));
	}
}