<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata("admin_id") == true) {
			redirect(base_url() . 'dashboard');
		}
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function Authenticate()
	{
		// form validations
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		// this function of set error in all input box in login section
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run()) {
			//get input data
			$email = $this->input->post('email');
			$pass = $this->input->post('password');

			// load model
			$this->load->model('login_model');
			$result = $this->login_model->isvalidate($email, $pass);

			// session set login data
			if (!empty($result)) {
				$sess_Data = array(
					"admin_id" => $result['id'],
					"name" => $result['name'],
					"email" => $result['email'],
					"image" => $result['image'],
				);
				$this->session->set_userdata($sess_Data);
				redirect(base_url() . 'dashboard');
			} else {
				$this->session->set_flashdata('error', 'Invalid User Id and Password combination');
				redirect(base_url() . 'admin');
			}
		} else {

			if ($this->session->userdata("admin_id") == TRUE) {
				redirect(base_url() . "dashboard");
			} else {
				$this->load->view('admin');
			}
		}
	}


	public function forgetPassword()
	{
		$data['details'] = $this->db->query("SELECT * FROM manage_admin")->result_array();
		if ($this->input->post()) {

			$email = $this->input->post('email');
			//$checkemail = $this->db->query("SELECT * FROM `admin` WHERE email ='$email'");
			$checkemail = $this->db->get_where('manage_admin', array('email' => $email));
			$rowcount = $checkemail->num_rows();

			if ($rowcount > 0) {
				$otp = mt_rand(10000, 99999);
				$query = $this->db->query("UPDATE `manage_admin` SET `otp` = '$otp' WHERE `manage_admin`.`email` = '$email'");

				redirect(site_url() . 'Login/forgetotp?email=' . $email . '');
			} else {
				redirect('Login/forgetPassword');
			}
		}
		$this->load->view('admin/forgetPassword');
	}

}
