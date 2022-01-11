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
       
             
        $this->load->view('frontend/home');
    }
    public function about()
    {   
        $data['about'] = $this->db->query('select * from manage_about_us')->result_array();
             
        $this->load->view('frontend/about',$data);
    }
    public function services()
    {   
        $data['service'] = $this->db->query('select * from manage_service')->result_array();
            
        $this->load->view('frontend/services',$data);
    }
    public function contact()
    {   
        
        $data['websitedata'] = $this->db->query('select * from manage_website_setting')->result_array();
         
        $this->load->view('frontend/contact',$data);
    }
 
 }
 
 /* End of file Slider.php */
 
?>