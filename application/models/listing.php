<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Model {

	public function search_results()
	{

	}

	public function create_item($name, $category, $brand, $description, $price)
	{
		
		$cat = "SELECT id FROM categories WHERE name = ?";

		$cat_id = $this->db->query($cat, array($category))->row_array();

		$brandquery = "SELECT id FROM brands WHERE name = ?";
		$brand_id = $this->db->query($brandquery, $brand)->row_array();

		$query2 = "INSERT INTO items(name, description, price, brand_id, created_on, updated_on, categories_id) 
			VALUES (?, ?, ?, {$brand_id['id']}, NOW(), NOW(), {$cat_id['id']})";

		$this->db->query($query2, array('name' => $name, 'description' => $description, 'price' => $price));
	}


	
}