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
       
        if($this->input->post()){
            
            $webValue = array(
                "address" => $this->input->post('address'),
                "email" => $this->input->post('email'),
                "phone" => $this->input->post('phone'),
                "embed_map" => $this->input->post('embed_map'),
                "copy_write" => $this->input->post('copy_write'),
                "design_by" =>  $this->input->post('design_by'),
                "status" => $this->input->post('status'),                 
                "entry_by" => 1,                 
                "cip" => $this->input->ip_address(),
            );
            if (!empty($_FILES["logo"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["logo"]["name"];
                $tmp_name = $_FILES["logo"]["tmp_name"];
                $error = $_FILES["logo"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $webValue['logo'] = $name;
            }
          
           
            $insert = $this->db->insert('manage_website_setting', $webValue);               
            if ($insert) {
                $this->session->set_flashdata('success', 'Data Successfully Saved');
                redirect(site_url().'website-settings');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'website-settings');
            }

        }
        $data['status'] = status();
        $data['main_content'] = 'admin/manage_website/add-website-setting';        
        $this->load->view('admin/template/template',$data);
    }
    public function website_edit($id)
    {
       
        if($this->input->post()){
            
            $webValue = array(
                "address" => $this->input->post('address'),
                "email" => $this->input->post('email'),
                "phone" => $this->input->post('phone'),
                "embed_map" => $this->input->post('embed_map'),
                "copy_write" => $this->input->post('copy_write'),
                "design_by" =>  $this->input->post('design_by'),
                "status" => $this->input->post('status'),                 
                "entry_by" => 1,                 
                "cip" => $this->input->ip_address(),
            );
            if (!empty($_FILES["logo"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["logo"]["name"];
                $tmp_name = $_FILES["logo"]["tmp_name"];
                $error = $_FILES["logo"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $webValue['logo'] = $name;
            }
          
            $insert =	$this->db->update('manage_website_setting',$webValue, array('id' => $id));     
                       
            if ($insert) {
                $this->session->set_flashdata('success', 'Data Successfully updated');
                redirect(site_url().'website-settings');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'website-settings');
            }

        }
        $data['getValue'] = $this->Common_Model->set_data('manage_website_setting',$id);
        $data['status'] = status();
        $data['main_content'] = 'admin/manage_website/add-website-setting';        
        $this->load->view('admin/template/template',$data);
    }


    

    public function delete_website($id)
    {
        $del = $this->db->delete('manage_website_setting', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'website-settings');
        }
       
    }
    

}
?>