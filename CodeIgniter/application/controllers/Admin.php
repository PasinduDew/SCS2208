<?php

    class Admin extends CI_Controller{

        public function __construct(){
            
            // Executing the Parent`s Constructor
            parent:: __construct();

            // Loading Necessary Liabries, Helpers and Models
            $this->load->model('admin_model');
            $this->load->helper('url_helper');
            $this->load->helper(array('form', 'url'));
        }



        public function index(){


            $data['page_title'] = 'Dashboard';
            $data['admins'] = $this->admin_model->getAdminProfiles();

        
            $this -> load -> view('Admin/Dashboard_Header', $data);
            $this -> load -> view('Admin/Dashboard_Content', $data);
            $this -> load -> view('Admin/Dashboard_Footer');
        }


        public function editProfile($admin_id = NULL){

            $data['page_title'] = 'Edit Profile';
            $image_path = "url";

            if($admin_id != NULL){
                $data['admin'] = $this->admin_model->getAdminProfile($admin_id);


            }

            $this -> load -> view('Admin/Dashboard_Header', $data);
            $this -> load -> view('Admin/Edit_Profile', $data);
            $this -> load -> view('Admin/Dashboard_Footer');


        }

        public function editAdmin($admin_id){

            $data['page_title'] = 'Edit Profile';
            $image_path = "url";

            if($admin_id != NULL){

                // Image File Upload Configauration
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '4096000'; // Max image size can be uploaded is 4 MB - 4096 KB
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
    
                // Loading the File Upload Library
                $this->load->library('upload', $config);
    
                // Uploading the File - do_upload()
                if ( ! $this->upload->do_upload('userimage'))
                {
                        $error = array('error' => $this->upload->display_errors());
    
                        
                        $this -> load -> view('Admin/Dashboard_Header', $data);
                        $this -> load -> view('Admin/Add_Admin',$error);
                        $this -> load -> view('Admin/Dashboard_Footer');
                }
                else
                {
                    $file_name = $this->upload->data('file_name');
                    $image_path = 'uploads/' . $file_name;
          
                }
                
                $this->admin_model->updateAdmin($admin_id,$image_path);
                redirect('admin/viewProfile/' . $admin_id);

            }
        }

        public function addAdmin(){

            $data['page_title'] = 'Add New Addministrator';

            $this -> load -> helper('url'); // To Use the base_url() Function in View

            $this -> load -> view('Admin/Dashboard_Header', $data);
            $this -> load -> view('Admin/Add_Admin', array('error' => ' ' ));
            $this -> load -> view('Admin/Dashboard_Footer');


        }

        public function viewProfile($admin_id = NULL){

            $data['page_title'] = 'View Profile';

            if($admin_id != NULL){
                $data['admin'] = $this->admin_model->getAdminProfile($admin_id);

            }

            $this -> load -> view('Admin/Dashboard_Header', $data);
            $this -> load -> view('Admin/Profile', $data);
            $this -> load -> view('Admin/Dashboard_Footer');


        }

        public function addAdminData(){
            $this->load->library('form_validation');
            $data['page_title'] = 'Add New Addministrator';
            $image_path = "url";

            // Image File Upload Configauration
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '4096000'; // Max image size can be uploaded is 4 MB - 4096 KB
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            // Loading the File Upload Library
            $this->load->library('upload', $config);

            // Uploading the File - do_upload()
            if ( ! $this->upload->do_upload('userimage'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    
                    $this -> load -> view('Admin/Dashboard_Header', $data);
                    $this -> load -> view('Admin/Add_Admin',$error);
                    $this -> load -> view('Admin/Dashboard_Footer');
            }
            else
            {
                $file_name = $this->upload->data('file_name');
                $image_path = 'uploads/' . $file_name;


                    
            }
            
            $this->admin_model->setAdmin($image_path);
            // Redirecting the Page to Admin
            redirect('admin');
                
        }
    }

?>