<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website_setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_Model');
    }

    public function index()
    {   
     
        $data['websetting'] =  $this->db->query('select * from manage_website_setting')->result_array(); 
         
         $data['main_content'] = 'admin/manage_website/website-setting';
        
        $this->load->view('admin/template/template',$data);
    }

    public function add_websetting()
    {
       
        if(!empty($this->input->post())){
            
            $webValue = array(
                "address" => $this->input->post('address'),
                "email" => $this->input->post('email'),
                "phone" => $this->input->post('phone'),
                "embed_map" => $this->input->post('embed_map'),
                "copy_write" => $this->input->post('copy_write'),
                "design_by" =>  $this->input->post('design_by'),
                "facebook" =>  $this->input->post('facebook'),
                "linkdin" =>  $this->input->post('linkdin'),
                "instagram" =>  $this->input->post('instagram'),
                "twitter" =>  $this->input->post('twitter'),
                "header_background_color" =>  $this->input->post('header_background_color'),
                "footer_background_color" =>  $this->input->post('footer_background_color'),
                "footer_content" =>  $this->input->post('footer_content'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );
            if (!empty($_FILES["logo"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["logo"]["name"];
                $tmp_name = $_FILES["logo"]["tmp_name"];
                $error = $_FILES["logo"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $webValue['logo'] = $name;
            }
          
            $query = $this->db->query('select * from manage_website_setting where id=1');
            
            if($query->num_rows() > 0){
                $insert = $this->db->update('manage_website_setting',$webValue, array('id' => 1));  
            }else {
                $insert = $this->db->insert('manage_website_setting', $webValue);  
            }
           
                         
            if ($insert) {
                $this->session->set_flashdata('success', 'Data Successfully Saved');
                redirect(site_url().'add-website-setting');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'add-website-setting');
            }

        }
        $data['getValue'] = $this->Common_Model->set_data('manage_website_setting',1);
        $data['status'] = status();
        $data['main_content'] = 'admin/manage_website/add_website_setting';        
        $this->load->view('admin/template/template',$data);
    }
  
    

}
?>