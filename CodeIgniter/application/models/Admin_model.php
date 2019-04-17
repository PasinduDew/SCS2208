<?php
    class Admin_model extends CI_Model{

        public function __construct()
        {
                $this->load->database();
                $this->load->helper('security');
        }

        public function getAdminProfiles(){

            $query = $this->db-> get('admin');
            return $query->result_array();

        }

        public function getAdminProfile($admin_id = NULL){

            if($admin_id != NULL){

                $query = $this->db->get_where('admin', array('id' => $admin_id));
                return $query->row_array();
            }


        }

        public function updateAdmin($admin_id = NULL, $image_path = NULL){

            // Implement the Password Verification Part Here


            // Admin Data Updation Section
            if($admin_id != NULL && $image_path != 'url'){

                $data = array(
                    'firstname' => $this->input->post('fname'),
                    'lastname' => $this->input->post('lname'),
                    'nic' => $this->input->post('nic'),
                    'dob' => $this->input->post('dob'),
                    'address' => $this->input->post('address'),
                    'designation' => $this->input->post('designation'),
                    'joined' => $this->input->post('joined'),
                    'email' => $this->input->post('email'),
                    'mobile' => $this->input->post('mob'),
                    'remarks' => $this->input->post('remarks'),
                    'imageurl' => $image_path,
                );
            
            $this->db->where('id', $admin_id);
            $this->db->update('admin', $data);

            }
            else if($admin_id != NULL && $image_path == 'url' ){
                $data = array(
                    'firstname' => $this->input->post('fname'),
                    'lastname' => $this->input->post('lname'),
                    'nic' => $this->input->post('nic'),
                    'dob' => $this->input->post('dob'),
                    'address' => $this->input->post('address'),
                    'designation' => $this->input->post('designation'),
                    'joined' => $this->input->post('joined'),
                    'email' => $this->input->post('email'),
                    'mobile' => $this->input->post('mob'),
                    'remarks' => $this->input->post('remarks')
                );
            
            $this->db->where('id', $admin_id);
            $this->db->update('admin', $data);
                

            } 
        }

        // Insert Admin Record to the Database
        public function setAdmin($image_path){

            // $str = do_hash($str, 'md5'); // MD5

            $data = array(
                'firstname' => $this->input->post('fname'),
                'lastname' => $this->input->post('lname'),
                'nic' => $this->input->post('nic'),
                'dob' => $this->input->post('dob'),
                'address' => $this->input->post('address'),
                'designation' => $this->input->post('designation'),
                'joined' => $this->input->post('joined'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mob'),
                'remarks' => $this->input->post('remarks'),
                'imageurl' => $image_path,

            );
        
            return $this->db->insert('admin', $data);



        }
        
    }
    

?>