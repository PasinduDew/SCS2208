<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_ctrl extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Customer_model');
	}
	function index()
	{
		$this->load->model('Customer_model');		
		$data['blogs'] = $this -> Customer_model->getData();
		$this->load->view('layout/header');
		$this->load->view('pages/index',$data);
	}
	//directs to the registration page
	public function register()
	{
	
		
		//load view
		$this -> load -> view('layout/header');
		$this -> load-> view('pages/Customer');
		$this -> load -> view('layout/footer');

	}
	
	//add new customer
	public function submit()
	{
		$this->load->model('Customer_model');
		$result = $this -> Customer_model ->submit();
		if($result){
			$this->session->set_flashdata('success_msg' , 'Record added successfully');
		}
		else{
			$this->session->set_flashdata('error_msg' , 'Failed to add record');
		}

		redirect(base_url('index.php/Customer_ctrl/index'));
		
		
	}
	//directs to the update page
	public function update($Id)
	{
	
		$this->load->model('Customer_model');
		$data['blog'] = $this -> Customer_model-> getRowById($Id);
		$this -> load -> view('layout/header');
		$this -> load-> view('pages/update',$data);
		$this -> load -> view('layout/footer');
		
		  
	}
	//edit customer details
	public function edit()
	{
		$this->load->model('Customer_model');
		$result = $this -> Customer_model ->update();
		if($result){
			$this->session->set_flashdata('success_msg' , 'Record updated successfully');
		}
		else{
			$this->session->set_flashdata('error_msg' , 'Failed to update record');
		}

		redirect(base_url('index.php/Customer_ctrl/index'));
		

	}
	//delete customer
	public function delete($Id)
	{
		$this->load->model('Customer_model');
		$result = $this -> Customer_model ->delete($Id);
		if($result){
			$this->session->set_flashdata('success_msg' , 'Record deleted successfully');
		}
		else{
			$this->session->set_flashdata('error_msg' , 'Failed to delete record');
		}

		redirect(base_url('index.php/Customer_ctrl/index'));
		

	}




}
	


?> 