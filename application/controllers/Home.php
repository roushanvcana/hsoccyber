<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
   // echo $this->session->userdata("admin_id");die;
    if ($this->session->userdata("admin_id") == false) {
     redirect('admin');
    }
  }

  public function index()
  {
    $data['total_user'] = $this->db->query(" SELECT COUNT(id)  FROM manage_admin;")->row_array();
    $data['main_content'] = 'admin/dashboard';
		$this->load->view('admin/template/template',$data);
    
  }


  public function logout()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->sess_destroy();
		redirect(base_url() . 'admin');
	}
}
