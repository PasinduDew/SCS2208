<?php 

    class Login extends CI_Controller{


        public function __construct(){


            parent :: __construct();

            $this->load->helper('url_helper');
            $this->load->helper(array('form', 'url'));
        }

        public function index(){

            $this->load->view('Login/Login_Page');
        }
    }



?>