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
             
        $this->load->view('frontend/about');
    }
    public function services()
    {   
             
        $this->load->view('frontend/services');
    }
    public function contact()
    {   
             
        $this->load->view('frontend/contact');
    }
 
 }
 
 /* End of file Slider.php */
 
?>