<?php

class Customer_model extends CI_Model
{
	
	public function getData()
	{
		$query = $this->db->get('customer');
		if ($query -> num_rows() >0) {
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function submit()
	{
		$data = array(
			'Id'=> $this->input->post('Id'),
			'fName'=> $this->input->post('fName'),
			'lName'=> $this->input->post('lName'),
			'gender'=>$this->input->post('gender'),
			'email'=>$this->input->post('email'),
			'contactNum'=> $this->input->post('contactNum')
			);

		//insert data to the database
		$this -> db-> insert('customer',$data); 
		if ($this-> db -> affected_rows() >0 ) {
			return true;
		}
		else{
			return false;
		}
	}

	public function getRowById($Id)
	{
		$this -> db-> where('Id',$Id); 
		$query = $this -> db -> get('customer');
		if ($query -> num_rows() >0) {
			return $query->result()[0];
		}
		else
		{
			return false;
		}
	}

	public function update()
	{
		$Id=$this-> input -> post('txt_hidden');

		$field = array(
			'Id'=> $this->input->post('Id'),
			'fName'=> $this->input->post('fName'),
			'lName'=> $this->input->post('lName'),
			'gender'=>$this->input->post('gender'),
			'email'=>$this->input->post('email'),
			'contactNum'=> $this->input->post('contactNum'),
			'password'=>$this->input->post('password')
			);

		
		$this -> db -> where('Id',$Id);
		$this -> db -> update('customer',$field);
		echo $this-> db ->last_query(); extit;
		if ($this-> db -> affected_rows() >0) {
			return true;
		}
		else{
			return false;
		}
	
	}
	public function delete($Id)
	{
		$this ->db -> where('Id',$Id);
		$this ->db -> delete('customer');
		if ($this-> db -> affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

}

?>