<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Common_Model');
	}

    public function index()
    {
        $data['employee_list']  = $this->Common_Model->getDataby('user_details',array('role' => 2));
		$data['main_content'] = 'admin/manage_employee/employee-list';
		$this->load->view('admin/template/template',$data);
	 
    }

}

/* End of file Controllername.php */

?>