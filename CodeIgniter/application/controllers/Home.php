<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
            
		// Executing the Parent`s Constructor
		parent:: __construct();

		// Loading Necessary Liabries and Models
		$this->load->model('admin_model');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Home/Landing_Header');
		$this->load->view('Home/Landing_Content');
		$this->load->view('Home/Landing_Footer');
	}
}
