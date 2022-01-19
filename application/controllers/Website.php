<?php 
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Website extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_Model');
    }

    public function home()
    {   
        $data['brandSetion'] = $this->db->query('select * from manage_trusted_brand limit 1,4')->result_array();  
        $data['webmodel'] = $this->db->query('select * from manage_webmodel where id=1')->row_array(); 
        $data['brandrow'] = $this->db->query('select * from manage_trusted_brand where upload_logo = " "')->row_array();  
        $data['brandSetiontwo'] = $this->db->query('select * from manage_trusted_brand limit 4,8')->result_array();  
        $data['syllabussection'] = $this->db->query('select * from manage_syllabus')->result_array();  
        $data['serviceAdd'] = $this->db->query('select * from service_section')->result_array();  
        $data['slider'] = $this->db->query('select * from manage_slider')->result_array(); 
        $data['sliderBox'] = $this->db->query('select * from manage_sliderbox')->result_array();  
        $data['testimonial'] = $this->db->query('select * from manage_testimonial')->result_array();  
        $data['articles'] = $this->db->query('select * from articles')->result_array();
        $data['aboutsus'] = $this->db->query('select * from manage_about_us')->row_array();
        $data['welcomemsg_data'] = $this->db->query('select * from manage_welcome_message')->row_array();
      
        $this->load->view('frontend/home',$data);
    }
    public function about()
    {   
        $data['about'] = $this->db->query('select * from manage_about_us')->result_array();
             
        $this->load->view('frontend/about',$data);
    }
    public function services()
    {   
        $data['service'] = $this->db->query('select * from service_section')->result_array();            
        $this->load->view('frontend/services',$data);
    }
    public function contact()
    {   
        
        $data['websitedata'] = $this->db->query('select * from manage_website_setting')->result_array();
         
        $this->load->view('frontend/contact',$data);
    }

    public function privacy_policy()
    {
         
        $this->load->view('frontend/privacy_policy');
    }

    public function cookie_policy()
    {
        $this->load->view('frontend/cookie_policy'); 
    }
 
    public function term_of_use()
    {
        $this->load->view('frontend/term_of_use'); 
    }
 }
 
 /* End of file Slider.php */
 
?>