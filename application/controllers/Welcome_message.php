<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Welcome_message extends CI_Controller {

        public function __construct() {
            parent::__construct();        
            // load base_url
            $this->load->helper('url');
            $this->load->model('Common_Model');
        }
    
        public function index()
        {
            if(!empty($this->input->post())){

                $welcomemsg = array(
                    "title" => $this->input->post('title'),
                    "message" => $this->input->post('description'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address()
                );

                $data = [];
   
                $count = count($_FILES['small_image']['name']);

                for($i=0;$i<$count;$i++){    
                    if(!empty($_FILES['small_image']['name'][$i])){    
                    $_FILES['file']['name'] = $_FILES['small_image']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['small_image']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['small_image']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['small_image']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['small_image']['size'][$i];

                    $config['upload_path'] = 'uploads/gallery-image/'; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size'] = '5000';
                    $config['file_name'] = $_FILES['small_image']['name'][$i];

                    $this->load->library('upload',$config); 

                    if($this->upload->do_upload('file')){
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];

                        $data['totalFiles'][] = $filename;
                    }
                    }

                }
                $welcomemsg['small_image'] =  implode(",", $data['totalFiles']);

                if(!empty($_FILES["full_width"]["name"])) {
                    $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["full_width"]["name"];
                    $tmp_name = $_FILES["full_width"]["tmp_name"];
                    $error = $_FILES["full_width"]["error"];
                    $path = 'uploads/gallery-image/'. $name;
                    move_uploaded_file($tmp_name, $path);
                    $welcomemsg['full_width'] = $name;
                }

             //$insert = $this->db->insert('manage_welcome_message', $welcomemsg); 
                
                $query = $this->db->query('select * from manage_welcome_message where id=1');
            
                if($query->num_rows() > 0){
                    $insert = $this->db->update('manage_welcome_message',$welcomemsg, array('id' => 1));  
                }else {
                    $insert = $this->db->insert('manage_welcome_message', $welcomemsg);  
                }

                if ($insert) {
                    $this->session->set_flashdata('success', 'Message Successfully Saved');
                    redirect(site_url().'welcome-message');
                } else {
                    $this->session->set_flashdata('success', 'Some error occured.Please try again later...');
                    redirect(site_url().'welcome-message');
                }
                  
            }

            $data['getValue'] = $this->Common_Model->set_data('manage_welcome_message',1);            
            $data['main_content'] = 'admin/welcome_message/welcomemessage';
            $this->load->view('admin/template/template',$data);
        }

        public function brand_upload(){ 
            $data = array(); 
         
            // If file upload form submitted 
            if($this->input->post('fileSubmit')){               
                // If files are selected to upload 
                if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                    $filesCount = count($_FILES['files']['name']); 
                    // print_r($filesCount);
                    // exit;
                    for($i = 0; $i < $filesCount; $i++){ 
                        $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                        $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                        $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                        $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                         
                        // File upload configuration 
                        $uploadPath = 'uploads/gallery-image'; 
                        $config['upload_path'] = $uploadPath; 
                        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                      
                        // Load and initialize upload library 
                        $this->load->library('upload', $config); 
                        $this->upload->initialize($config); 
                         
                        // Upload file to server 
                        if($this->upload->do_upload('file')){ 
                            // Uploaded file data 
                            $fileData = $this->upload->data(); 
                            $uploadData[$i]['upload_logo'] = $fileData['file_name']; 
                           // $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                        }
                    } 
                     
                    if(!empty($uploadData)){ 
                        // Insert files data into the database                      
                        $insert = $this->db->insert_batch('manage_trusted_brand',$uploadData); 
                        // Upload status message 
                        if($insert){
                            redirect(site_url().'add-brand');
                        }
                       
                    }else{ 
                    } 
                }else{ 
                    $statusMsg = 'Please select image files to upload.'; 
                } 
            } 


           
        } 

        public function delete_photo($id)
        {
            $del = $this->db->delete('manage_trusted_brand', array('id' => $id));
            if(!empty($del)){
                redirect(site_url().'add-brand');
            }
        }

        public function delete_service_photo($id)
        {
            $del = $this->db->delete('service_details', array('id' => $id));
            if(!empty($del)){
                redirect(site_url().'add-service');
            }
        }

        public function add_serviceimg()
        {
            $data = array(); 
         
            // If file upload form submitted 
            if($this->input->post('serviceImage')){               
                // If files are selected to upload 
                if(!empty($_FILES['logo']['name']) && count(array_filter($_FILES['logo']['name'])) > 0){ 
                    $filesCount = count($_FILES['logo']['name']);                   
                   
                    for($i = 0; $i < $filesCount; $i++){
                        $_FILES['file']['name']     = $_FILES['logo']['name'][$i]; 
                        $_FILES['file']['type']     = $_FILES['logo']['type'][$i]; 
                        $_FILES['file']['tmp_name'] = $_FILES['logo']['tmp_name'][$i]; 
                        $_FILES['file']['error']     = $_FILES['logo']['error'][$i]; 
                        $_FILES['file']['size']     = $_FILES['logo']['size'][$i]; 
                         
                        // File upload configuration 
                        $uploadPath = 'uploads/gallery-image'; 
                        $config['upload_path'] = $uploadPath; 
                        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                      
                        // Load and initialize upload library 
                        $this->load->library('upload', $config); 
                        $this->upload->initialize($config); 
                         
                        // Upload file to server 
                        if($this->upload->do_upload('file')){ 
                            // Uploaded file data 
                            $fileData = $this->upload->data(); 
                            $uploadData[$i]['logo'] = $fileData['file_name']; 
                            $uploadData[$i]['title'] = $this->input->post('title'); 
                            $uploadData[$i]['description'] = $this->input->post('description'); 
                            $uploadData[$i]["status"] = 1;              
                            $uploadData[$i]["entry_by"] = 1;                 
                            $uploadData[$i]["ip_add"] = $this->input->ip_address();
                        }
                    } 
                    
                     
                    if(!empty($uploadData)){ 
                        // Insert files data into the database                      
                        $insert = $this->db->insert_batch('service_details',$uploadData); 
                        // Upload status message 
                        if($insert){
                            redirect(site_url().'add-service');
                        }
                    }
                }else{ 
                    $statusMsg = 'Please select image files to upload.'; 
                } 
            } 
        }
    
    }

  //  Welcome_message.php
    
    /* End of file Welcome_message.php */
    
?>