<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_Model');
    }

    public function index()
    {
        
        $data['status'] = status();
        $data['admin_details'] =  $this->Common_Model->gettablelist('manage_admin');     
        $data['main_content'] = 'admin/manage_admin/manage-admin';
		$this->load->view('admin/template/template',$data);
    }

    public function addAdmin()
    {
      $data['status'] = status();

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run('add_admin_rules') == true) {        
         
                $data = array(
                    "email" => $this->input->post('email'),
                    "password" => md5($this->input->post('password')),
                    "name" => $this->input->post('name'),
                    "phone" => $this->input->post('phone'),
                    "status" => $this->input->post('status'),                 
                    "cip" => $this->input->ip_address(),
                    "cby" => $this->session->userdata("admin_id"),
                );


                if (!empty($_FILES["image"]["name"])) {
                  
                    $name= rand(1,999999).".".$_FILES["image"]["name"];
                    $tmp_name = $_FILES["image"]["tmp_name"];
                    $path = 'uploads/admin_img/' . $name;
                    move_uploaded_file($tmp_name, $path);
                    $data['image'] = $name;
                }

                $insert = $this->db->insert('manage_admin', $data);

                if ($insert) {
                    $this->session->set_flashdata('success', 'Admin Insert Successfully');
                    redirect(site_url() . 'Admin/index');
                } else {
                    $this->session->set_flashdata('success', 'Admin Not Insert');
                    redirect(site_url() . 'Admin/addAdmin');
                }
            
        } 
                              
        $data['main_content'] = 'admin/manage_admin/add-admin';
		$this->load->view('admin/template/template',$data);
    }

    public function editAdmin($id)
    {
        $data['getValue'] = $this->db->get_where("manage_admin", array('id' => $id))->row_array();     

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run('edit_admin_rules') == true) {
                $data = array(
                    "email" => $this->input->post('email'),
                    "name" => $this->input->post('name'),
                    "phone" => $this->input->post('phone'),              
                    "status" => $this->input->post('status'),                  
                    "cip" => $this->input->ip_address(),
                    "cby" => $this->session->userdata("admin_id"),
                );
                if (!empty($_FILES["image"]["name"])) {      
                    $name= rand(1,999999).".".$_FILES["image"]["name"];
                    $tmp_name = $_FILES["image"]["tmp_name"];
                    $path = 'uploads/admin_img/' . $name;
                    move_uploaded_file($tmp_name, $path);
                    $data['image'] = $name;
                }
                if(!empty($this->input->post('password'))){
                    $data['password'] = md5($this->input->post('password'));
                }

                $update = $this->db->update('manage_admin', $data, array('id' => $id));
                if ($update) {
                    $this->session->set_flashdata('msg', 'Admin Update Successfully');
                    redirect(site_url() . 'manage-admin');
                } 
            
        } 

        $data['status'] = status();
        $data['main_content'] = 'admin/manage_admin/add-admin';
		$this->load->view('admin/template/template',$data);
       
    }

    
    public function delete($id)
    {
       
        $delete = $this->db->delete('manage_admin', array('id' => $id));
        if ($delete) {
            $this->session->set_flashdata('msg', 'Data successfully delete');
            redirect('manage-admin', 'refresh');
        }
    }
    function check_email_avalibility()
    {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';
        } else {
            $this->load->model("edit_model");
            if ($this->edit_model->is_email_available_Admin($_POST["email"])) {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';
            } else {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';
            }
        }
    }
}
