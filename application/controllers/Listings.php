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

		$this->load->view('homeii', array('matches' => $matches));

	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact_us');
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

		$this->load->view('listings', array('cat_results' => $search_results));
	}

	public function item_page($num)
	{
		$this->load->model('listing');
		$results = $this->listing->display_item($num);

		$this->load->view('item_page',array('ind_item' => $results));
	}
}