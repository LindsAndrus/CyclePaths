<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Model {

	public function search_results()
	{

	}

	public function create_item($name, $category, $brand, $description, $price, $id)
	{

		$cat = "SELECT id FROM categories WHERE name = ?";

		$cat_id = $this->db->query($cat, array($category))->row_array();

		$brandquery = "SELECT id FROM brands WHERE name = ?";
		$brand_id = $this->db->query($brandquery, $brand)->row_array();

		//Set variable $user_id to user id from session data
		$user_id = $this->session->userdata($user['user_id']);

		//Last line inserts ID of the user that created the posting
		$query = "INSERT INTO items(name, description, price, created_on, updated_on, categories_id, seller_id) 
			VALUES (?, ?, ?, NOW(), NOW(), {$cat_id['id']}, $user_id)";

		$this->db->query($query, array('name' => $name, 'description' => $description, 'price' => $price));

		$item_id = $this->db->insert_id();
		$query2 = "INSERT INTO items_has_brands (items_id, brands_id) VALUES ({$item_id}, {$brand_id['id']})";
		$this->db->query($query2);
	}

	public function active_listings()
	{
		
	}
	

}