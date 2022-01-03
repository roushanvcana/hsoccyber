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
                    "cby" => 1,                 
                    "cip" => $this->input->ip_address(),
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
                    "cby" => 1,                 
                    "cip" => $this->input->ip_address(),
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
 
 }
 
 /* End of file Slider.php */
 
?>