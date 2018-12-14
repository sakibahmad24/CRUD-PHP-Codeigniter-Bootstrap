<?php

class Product extends CI_Controller{

    public function add(){
    	if (isset($_POST['add'])) {
    		
    		$this->load->model('Product_model');
    		if ($this->Product_model->add_product()) {
    			$this->session->set_flashdata('success', 'Product added!!!');
    			redirect('product/add', 'refresh');

    		}

    		else{
    			$this->session->set_flashdata('error', 'An error occured!!');
    			redirect('product/add', 'refresh');
    		}

    	}
        $this->load->view('add_product');
    }

    public function all(){
    	$this->load->model('Product_model');
    	$products = $this->Product_model->get_all_products();
    	$data['products'] = $products;
    	$this->load->view('all_products', $data);
    }

    public function edit($id){

		$this->load->model('Product_model');
    	if (isset($_POST['update'])) {
    		# code...
    		if ($this->Product_model->updateProduct($id)) {
    			# code...
    			$this->session->set_flashdata('success', 'Product updated succesfully!!');
    			redirect('product/edit/'.$id, 'refresh');
    		}
    		else{
    			$this->session-set_flashdata('error', 'An error occured!!');
    			redirect('product/edit/'.$id, 'refresh');
    		}
    	}

    	$data['product'] = $this->Product_model->getProduct($id);
    	$this->load->view('edit_product', $data);
    }

    public function delete_row($id){
    	$this->load->model('Product_model');
    	$this->Product_model->deleteProduct($id);
    	redirect('product/all', 'refresh');
    }	

}

?>