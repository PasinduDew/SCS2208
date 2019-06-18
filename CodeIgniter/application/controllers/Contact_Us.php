<?php 
	class Contact_Us extends CI_Controller{


		public function __construct(){

			parent :: __construct();
			$this->load->helper('url_helper');
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');

		}

		public function index(){

			$data = array();
			if($this->session->userdata('id') != null){
				
				$data['user'] = array(
					'id' => $this->session->userdata('id'),
					'firstname' => $this->session->userdata('firstname'),
					'lastname' => $this->session->userdata('lastname'),
					'role' => $this->session->userdata('role'),
					'email' => $this->session->userdata('email'),
					'imgurl' =>$this->session->userdata('imgurl')

				);
			}
			else{

				$data['user'] = array(
					'id' => "",
					'firstname' => "",
					'lastname' => "",
					'role' => "",
					'email' => "",
					'imgurl' => ""

				);


			}

			// To Tell the Header which page is activated
			$data['active'] = "Contact Us";

			$this->load->view('Templates/Header', $data);
			$this->load->view('Contact_Us/Contact_Us', $data);
			$this->load->view('Templates/Footer');

		}
	}



?>
