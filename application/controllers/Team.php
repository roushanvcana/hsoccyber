<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_Model');
    }

    public function index()
    {
        $data['teamlist'] =  $this->db->query('select * from manage_team')->result_array();          
        $data['main_content'] = 'admin/team/team-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_team()
    {
        if(!empty($this->input->post())) {

                $arrayData = array(
                    "heading" => $this->input->post('heading'),
                    "description" => $this->input->post('description'),
                    "name" => $this->input->post('name'),
                    "designation" => $this->input->post('designation'),
                    "facebook_link" => $this->input->post('facebook_link'),
                    "twitter_link" => $this->input->post('twitter_link'),
                    "linkdin" => $this->input->post('linkdin'),
                    "instagram" => $this->input->post('instagram'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );
                
                if (!empty($_FILES["photo"]["name"])) {
                    $name = 'IMG'."-".rand(1000, 100000).".".$_FILES["photo"]["name"];
                    $tmp_name = $_FILES["photo"]["tmp_name"];
                    $error = $_FILES["photo"]["error"];
                    $path = 'uploads/gallery-image/'. $name;
                    move_uploaded_file($tmp_name, $path);
                    $arrayData['photo'] = $name;
                }

               $keynsert = $this->db->insert('manage_team', $arrayData); 
               if ($keynsert) {
                $this->session->set_flashdata('success', 'Data Successfully Saved');
                redirect(site_url().'team-list');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'team-list');
            }
        }
        $data['main_content'] = 'admin/team/add_teams_data';        
        $this->load->view('admin/template/template',$data);
    }

    public function edit_team($id)
    {
        if(!empty($this->input->post())) {
                $arrayData = array(
                    "heading" => $this->input->post('heading'),
                    "description" => $this->input->post('description'),
                    "name" => $this->input->post('name'),
                    "designation" => $this->input->post('designation'),
                    "facebook_link" => $this->input->post('facebook_link'),
                    "twitter_link" => $this->input->post('twitter_link'),
                    "linkdin" => $this->input->post('linkdin'),
                    "instagram" => $this->input->post('instagram'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );
                
                if (!empty($_FILES["photo"]["name"])) {
                    $name = 'IMG'."-".rand(1000, 100000).".".$_FILES["photo"]["name"];
                    $tmp_name = $_FILES["photo"]["tmp_name"];
                    $error = $_FILES["photo"]["error"];
                    $path = 'uploads/gallery-image/'. $name;
                    move_uploaded_file($tmp_name, $path);
                    $arrayData['photo'] = $name;
                }

                $insert = $this->db->update('manage_team',$arrayData, array('id' => $id));    
               if ($insert) {
                $this->session->set_flashdata('success', 'Data Successfully updated');
                redirect(site_url().'team-list');
            } else {
                $this->session->set_flashdata('success', 'Some error occured. Please try again...');
                redirect(site_url().'team-list');
            }
        }

        $data['getValue'] = $this->Common_Model->set_data('manage_team',$id);
        $data['main_content'] = 'admin/team/add_teams_data';        
        $this->load->view('admin/template/template',$data);
    }

    public function delete_team($id)
    {
        $del = $this->db->delete('manage_team', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'team-list');
        }
    }

}

/* End of file Team.php */

?>