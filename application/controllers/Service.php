<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_Model');
    }

    public function index()
    {
        $data['service'] =  $this->db->query('select * from manage_service')->result_array(); 
         
        $data['main_content'] = 'admin/service/service-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_service()
    {
        if ($this->input->post()) {
            $service = array(
                "title" => $this->input->post('title'),
                "description" => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );

            if (!empty($_FILES["icon_upload"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["icon_upload"]["name"];
                $tmp_name = $_FILES["icon_upload"]["tmp_name"];
                $error = $_FILES["icon_upload"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $service['icon_upload'] = $name;
            }

            if (!empty($_FILES["image_upload"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image_upload"]["name"];
                $tmp_name = $_FILES["image_upload"]["tmp_name"];
                $error = $_FILES["image_upload"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $service['image_upload'] = $name;
            }

            $insert = $this->db->insert('manage_service', $service); 
            if ($insert) {
                $this->session->set_flashdata('success', 'Service add Successfully Saved');
                redirect(site_url().'service');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'service');
            }
        }
        $data['main_content'] = 'admin/service/add-service';        
        $this->load->view('admin/template/template',$data);
    }

    public function delete_service($id)
    {
        $del = $this->db->delete('manage_service', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'service');
        }
    }

    public function edit_service($id)
    {
        if ($this->input->post()) {
            $service = array(
                "title" => $this->input->post('title'),
                "description" => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );

            if (!empty($_FILES["icon_upload"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["icon_upload"]["name"];
                $tmp_name = $_FILES["icon_upload"]["tmp_name"];
                $error = $_FILES["icon_upload"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $service['icon_upload'] = $name;
            }

            if (!empty($_FILES["image_upload"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image_upload"]["name"];
                $tmp_name = $_FILES["image_upload"]["tmp_name"];
                $error = $_FILES["image_upload"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $service['image_upload'] = $name;
            }

            $insert = $this->db->update('manage_service',$service, array('id' => $id)); 
            if ($insert) {
                $this->session->set_flashdata('success', 'Service add Successfully Saved');
                redirect(site_url().'service');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'service');
            }
        }
        $data['getValue'] = $this->Common_Model->set_data('manage_service',$id);
        $data['main_content'] = 'admin/service/add-service';        
        $this->load->view('admin/template/template',$data);
    }

    public function feature()
    {
        if($this->input->post()){
            
            $feature = array(
                "title" => $this->input->post('title'),
                "description" => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );

            $query = $this->db->query('select * from manage_feature where id=1');
            
            if($query->num_rows() > 0){
                $insert = $this->db->update('manage_feature',$feature, array('id' => 1));  
            }else {
                $insert = $this->db->insert('manage_feature', $feature);  
            }

            if ($insert) {
                $this->session->set_flashdata('success', 'Data Successfully Saved');
                redirect(site_url().'feature');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'feature');
            }
        }
        $data['getValue'] = $this->Common_Model->set_data('manage_feature',1);
        $data['status'] = status();
        $data['main_content'] = 'admin/feature/features';        
        $this->load->view('admin/template/template',$data);
    }

    public function feature_details()   
    {
        $data['featureDeatils'] =  $this->db->query('select * from manage_feature_details')->result_array(); 
        $data['status'] = status();
        $data['main_content'] = 'admin/feature_details/feature-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_feature_details()
    {  
        if($this->input->post()) {
            $brand = array(
                    "title" => $this->input->post('title'),
                    "description" => $this->input->post('description'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );
            if (!empty($_FILES["icon"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["icon"]["name"];
                $tmp_name = $_FILES["icon"]["tmp_name"];
                $error = $_FILES["icon"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $brand['icon'] = $name;
            }

            $insert = $this->db->insert('manage_feature_details', $brand);               
            if ($insert) {
                $this->session->set_flashdata('success', 'Brand Successfully Saved');
                redirect(site_url().'feature-details');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'feature-details');
            }
        } 
        $data['status'] = status();
        $data['main_content'] = 'admin/feature_details/add-feature-details';        
        $this->load->view('admin/template/template',$data);
    }

    public function delete_feature($id)
    {
        $del = $this->db->delete('manage_feature_details', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'feature-details');
        }
    }

    public function feature_edit_details($id)
    {
        if($this->input->post()) {
            $brand = array(
                    "title" => $this->input->post('title'),
                    "description" => $this->input->post('description'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );
            if (!empty($_FILES["icon"]["name"])) {
                $name = 'IMG'."-". rand(1000, 100000).".".$_FILES["icon"]["name"];
                $tmp_name = $_FILES["icon"]["tmp_name"];
                $error = $_FILES["icon"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $brand['icon'] = $name;
            }
            $insert =  $this->db->update('manage_feature_details',$brand, array('id' => $id));
             
            if ($insert) {
                $this->session->set_flashdata('success', 'Brand Successfully Saved');
                redirect(site_url().'feature-details');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'feature-details');
            }
        } 
        $data['getValue'] = $this->Common_Model->set_data('manage_feature_details',$id);  
        $data['status'] = status();
        $data['main_content'] = 'admin/feature_details/add-feature-details';        
        $this->load->view('admin/template/template',$data);
    }

}

/* End of file Service.php */

?>