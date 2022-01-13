<?php 
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Slider extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_Model');
    }

    public function index()
    {   
     
        $data['slider'] =  $this->db->query('select * from manage_slider')->result_array(); 
         
        $data['main_content'] = 'admin/slider/slider-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_slider()        
    {
        if($this->input->post()) {
            $addSlider = array(
                    "heading_text" => $this->input->post('heading_text'),
                    "slider_text" => $this->input->post('slider_text'),
                    "rename_button" => $this->input->post('rename_button'),
                    "link_pageon_button" => $this->input->post('link_pageon_button'),
                    "status" => $this->input->post('status'),                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );

            if (!empty($_FILES["slider_image"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["slider_image"]["name"];
                $tmp_name = $_FILES["slider_image"]["tmp_name"];
                $error = $_FILES["slider_image"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $addSlider['slider_image'] = $name;
            }

            $insert = $this->db->insert('manage_slider', $addSlider);               
            if ($insert) {
                $this->session->set_flashdata('success', 'Data Successfully Saved');
                redirect(site_url().'slider');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'slider');
            }
        }
        $data['status'] = status();
        $data['main_content'] = 'admin/slider/add-slider';        
        $this->load->view('admin/template/template',$data);
    }

    public function edit_slider($id)
    {
        if($this->input->post()) {
            $addSlider = array(
                    "heading_text" => $this->input->post('heading_text'),
                    "slider_text" => $this->input->post('slider_text'),
                    "rename_button" => $this->input->post('rename_button'),
                    "link_pageon_button" => $this->input->post('link_pageon_button'),
                    "status" => $this->input->post('status'),                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );

            if (!empty($_FILES["slider_image"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["slider_image"]["name"];
                $tmp_name = $_FILES["slider_image"]["tmp_name"];
                $error = $_FILES["slider_image"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $addSlider['slider_image'] = $name;
            }

            $insert =	$this->db->update('manage_slider',$addSlider, array('id' => $id));               
            if ($insert) {
                $this->session->set_flashdata('success', 'Data Successfully updated');
                redirect(site_url().'slider');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'slider');
            }
        }
        $data['getValue'] = $this->Common_Model->set_data('manage_slider',$id);
        $data['status'] = status();
        $data['main_content'] = 'admin/slider/add-slider';        
        $this->load->view('admin/template/template',$data);
    }

    public function delete_slider($id)
    {
        $del = $this->db->delete('manage_slider', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'slider');
        }
    }

    
    public function slider_box()
    {   
     
        $data['sliderbox'] =  $this->db->query('select * from manage_sliderbox')->result_array();          
        $data['main_content'] = 'admin/slider_box/slider-box';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_slider_box()
    {   
        if($this->input->post()) {
            $sliderBox = array(
                    "title" => $this->input->post('title'),
                    "background_color" => $this->input->post('background_color'),
                    "hover_color" => $this->input->post('hover_color'),
                    "description" => $this->input->post('description'),
                    "status" => $this->input->post('status'),                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address()
                );

            if (!empty($_FILES["image"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image"]["name"];
                $tmp_name = $_FILES["image"]["tmp_name"];
                $error = $_FILES["image"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $sliderBox['image'] = $name;
            }
            if (!empty($_FILES["logo"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["logo"]["name"];
                $tmp_name = $_FILES["logo"]["tmp_name"];
                $error = $_FILES["logo"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $sliderBox['logo'] = $name;
            }

            $insert = $this->db->insert('manage_sliderbox', $sliderBox);               
            if ($insert) {
                $this->session->set_flashdata('success', 'Slider box Successfully Saved');
                redirect(site_url().'slider-box');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'slider-box');
            }
        }
        $data['status'] = status();    
        $data['main_content'] = 'admin/slider_box/add-slider-box';        
        $this->load->view('admin/template/template',$data);
    }
    public function update_slider_box($id)
    {   
        if($this->input->post()) {
            $sliderBox = array(
                    "title" => $this->input->post('title'),
                    "background_color" => $this->input->post('background_color'),
                    "hover_color" => $this->input->post('hover_color'),
                    "description" => $this->input->post('description'),
                    "status" => $this->input->post('status'),                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address()
                );

            if (!empty($_FILES["image"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image"]["name"];
                $tmp_name = $_FILES["image"]["tmp_name"];
                $error = $_FILES["image"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $sliderBox['image'] = $name;
            }
            if (!empty($_FILES["logo"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["logo"]["name"];
                $tmp_name = $_FILES["logo"]["tmp_name"];
                $error = $_FILES["logo"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $sliderBox['logo'] = $name;
            }
           
            $insert =  $this->db->update('manage_sliderbox',$sliderBox, array('id' => $id));              
            if($insert){
                $this->session->set_flashdata('success', 'Slider box Successfully updated');
                redirect(site_url().'slider-box');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'slider-box');
            }
        }
        $data['getValue'] = $this->Common_Model->set_data('manage_sliderbox',$id);
        $data['status'] = status();    
        $data['main_content'] = 'admin/slider_box/add-slider-box';        
        $this->load->view('admin/template/template',$data);
    }

    public function delete_slider_box($id)
    {
        $del = $this->db->delete('manage_sliderbox', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'slider-box');
        }
    }


    public function brand_list()
    {
        $data['brandlist'] =  $this->db->query('select * from manage_trusted_brand')->result_array();          
        $data['main_content'] = 'admin/brand_list/brand-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_brand()
    {
        if($this->input->post()) {
            $brand = array(
                    "title" => $this->input->post('title'),
                    "background_color" => $this->input->post('background_color'),
                    "description" => $this->input->post('description'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                     "ip_add" => $this->input->ip_address(),
                );
            
            $query = $this->db->query('select * from manage_trusted_brand where id=1');
        
            if($query->num_rows() > 0){
                $insert = $this->db->update('manage_trusted_brand',$brand, array('id' => 1));  
            }else {
                $insert = $this->db->insert('manage_trusted_brand', $brand);  
            }
            //$insert = $this->db->insert('manage_trusted_brand', $brand);               
            if ($insert) {
                $this->session->set_flashdata('success', 'Brand Successfully Saved');
                redirect(site_url().'add-brand');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'add-brand');
            }
        }  
        $data['getValue'] = $this->db->query('select * from manage_trusted_brand where id=1')->row_array();
        $data['brand_photo'] = $this->db->query('select * from manage_trusted_brand where upload_logo != " "')->result_array();
        $data['status'] = status();    
        $data['main_content'] = 'admin/brand_list/add-trusted-brand';        
        $this->load->view('admin/template/template',$data);

    }

    public function edit_brand($id)
    {
        if($this->input->post()) {
            $brand = array(
                    "title" => $this->input->post('title'),
                    "background_color" => $this->input->post('background_color'),
                    "status" => $this->input->post('status'),                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );

            if (!empty($_FILES["image"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image"]["name"];
                $tmp_name = $_FILES["image"]["tmp_name"];
                $error = $_FILES["image"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $brand['upload_logo'] = $name;
            }

            $insert = $this->db->update('manage_trusted_brand',$brand, array('id' => $id));             
            if ($insert) {
                $this->session->set_flashdata('success', 'Brand Successfully Saved');
                redirect(site_url().'brand-section');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'brand-section');
            }
        }   
        $data['getValue'] = $this->Common_Model->set_data('manage_trusted_brand',$id);  

        $data['status'] = status();    
        $data['main_content'] = 'admin/brand_list/add-trusted-brand';        
        $this->load->view('admin/template/template',$data);
    }

    public function delete_brand($id)
    {
        $del = $this->db->delete('manage_trusted_brand', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'brand-section');
        }
    } 

    public function about_mes()
    {
        $data['aboutme'] =  $this->db->query('select * from manage_about_us')->result_array();          
        $data['main_content'] = 'admin/about_me/about-me';        
        $this->load->view('admin/template/template',$data); 
    }


    public function add_about_mes()
    {
        //$data['brandlist'] =  $this->db->query('select * from manage_trusted_brand')->result_array();   
        if($this->input->post()) {
            $aboutme = array(
                    "title" => $this->input->post('title'),
                    "description" => $this->input->post('description'),
                    "year_of_experience" => $this->input->post('year_of_experience'),
                    "number_of_employee" => $this->input->post('number_of_employee'),
                    "number_of_partners" => $this->input->post('number_of_partners'),
                    "background_color" => $this->input->post('background_color'),
                    "heading" => $this->input->post('heading'),
                    "mission" => $this->input->post('mission'),
                    "vision" => $this->input->post('vision'),
                    "moto" => $this->input->post('moto'),
                    "biography" => $this->input->post('biography'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );

                if (!empty($_FILES["upload_biography"]["name"])) {
                    $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["upload_biography"]["name"];
                    $tmp_name = $_FILES["upload_biography"]["tmp_name"];
                    $error = $_FILES["upload_biography"]["error"];
                    $path = 'uploads/gallery-image/'. $name;
                    move_uploaded_file($tmp_name, $path);
                    $aboutme['upload_biography'] = $name;
                }
    

            $query = $this->db->query('select * from manage_about_us where id=1');
            
            if($query->num_rows() > 0){
                $insert = $this->db->update('manage_about_us',$aboutme, array('id' => 1));  
            }else {
                $insert = $this->db->insert('manage_about_us', $aboutme);  
            }

            if($insert) {
                $this->session->set_flashdata('success', 'About me Successfully Saved');
                redirect(site_url().'add-about');
            } else {
                $this->session->set_flashdata('success', 'Some error occured. Please try again...');
                redirect(site_url().'add-about');
            }
        }   
        $data['getValue'] = $this->Common_Model->set_data('manage_about_us',1);  
        $data['status'] = status();    
        $data['main_content'] = 'admin/about_me/add-inf';        
        $this->load->view('admin/template/template',$data);
    }

 
 }
 
 /* End of file Slider.php */
 
?>