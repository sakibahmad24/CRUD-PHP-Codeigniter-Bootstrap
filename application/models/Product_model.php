<?php

/**
 * 
 */
class Product_model extends CI_Model
{
	public function add_product(){

		$data = array(
			'product_name' => $this->input->post('product_name'),
			'product_price' => $this->input->post('product_price'),
			'quantity' => $this->input->post('quantity'),
			'company_name' => $this->input->post('company_name'),
			'description' => $this->input->post('description'),
			'date_created' => $this->input->post('NOW()'),
			'date_updated' => $this->input->post('NOW()'),
		);
		$this->db->insert('products', $data);
		$last_id = $this->db->insert_id();

		return $last_id; 
	}

	public function get_all_products(){ 
		$this->db->select('*');
		$this->db->from('products');
		$query = $this->db->get();
		return $query->result();

	}

	public function getProduct($id){

		$this->db->select('*');
		$this->db->where('product_id', $id);
		$this->db->from('products');
		$query = $this->db->get();
		return $query->row();


	}

	public function updateProduct($id){
		$data = array(
			'product_name' => $this->input->post('product_name'),
			'product_price' => $this->input->post('product_price'),
			'quantity' => $this->input->post('quantity'),
			'company_name' => $this->input->post('company_name'),
			'description' => $this->input->post('description'),
		);

		$this->db->where('product_id', $id);
		$this->db->update('products', $data);
		return $id;
	}

	public function deleteProduct($id){
		$this->db->where('product_id', $id);
		$this->db->delete('products');
	}
}

?>