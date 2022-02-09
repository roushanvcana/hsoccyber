<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_Model');
    }

    public function index()
    {
        $data['service'] =  $this->db->query('select * from manage_service')->result_array(); 
         
        $data['main_content'] = 'admin/service/service-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_service()
    {
        if ($this->input->post()) {
            $service = array(
                "title" => $this->input->post('title'),
                "description" => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );

            if (!empty($_FILES["image"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image"]["name"];
                $tmp_name = $_FILES["image"]["tmp_name"];
                $error = $_FILES["image"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $service['image'] = $name;
            }
            //manage_service is table ko remove krna hai
            $insert = $this->db->insert('service_section', $service); 
            if ($insert) {
                $this->session->set_flashdata('success', 'Service add Successfully Saved');
                redirect(site_url().'add-service');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'add-service');
            }
        }
        $data['service'] =  $this->db->query('select * from service_section')->result_array();
        $data['brand_photo'] =  $this->db->query('select * from service_details')->result_array(); 
        $data['main_content'] = 'admin/service/add-service';        
        $this->load->view('admin/template/template',$data);
    }

    public function delete_service($id)
    {
        $del = $this->db->delete('manage_service', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'service');
        }
    }

    public function edit_service($id)
    {
        if ($this->input->post()) {
            $service = array(
                "title" => $this->input->post('title'),
                "description" => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );

            if (!empty($_FILES["image"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image"]["name"];
                $tmp_name = $_FILES["image"]["tmp_name"];
                $error = $_FILES["image"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $service['image'] = $name;
            }
           
            $insert = $this->db->update('service_section',$service, array('id' => $id)); 
            if ($insert) {
                $this->session->set_flashdata('success', 'Service add Successfully Saved');
                redirect(site_url().'add-service');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'add-service');
            }
        }
        $data['getValue'] = $this->Common_Model->set_data('service_section',$id);
        $data['service'] =  $this->db->query('select * from service_section')->result_array(); 
        $data['brand_photo'] =  $this->db->query('select * from service_details')->result_array(); 
        $data['main_content'] = 'admin/service/add-service';        
        $this->load->view('admin/template/template',$data);
    }

    public function feature()
    {
        if($this->input->post()){            
            $feature = array(
                "feature_type" => $this->input->post('featuretype'),
                "feature_title" => $this->input->post('feature_title'),
                "description" => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );
           
            $insert = $this->db->insert('manage_feature', $feature);  
            if ($insert) {
                $this->session->set_flashdata('success', 'Data Successfully Saved');
                redirect(site_url().'feature');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'feature');
            }
        }
      
        $data['featuresdata'] = $this->db->query('select * from manage_feature')->result_array();
        $data['status'] = status();
        $data['faturetype'] = feature_type();
        $data['main_content'] = 'admin/feature/features';        
        $this->load->view('admin/template/template',$data);
    }

    public function feature_edit($id)
    {
        if($this->input->post()){  

            $feature = array(
                "feature_type" => $this->input->post('featuretype'),
                "feature_title" => $this->input->post('feature_title'),
                "description" => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );
           
            $insert = $this->db->update('manage_feature',$feature, array('id' => $id));
            if ($insert) {
                $this->session->set_flashdata('success', 'Feature Successfully Updated....');
                redirect(site_url().'feature');
            } else {
                $this->session->set_flashdata('success', 'Some error occured.please try again');
                redirect(site_url().'feature');
            }
        }

        $data['getValue'] = $this->Common_Model->set_data('manage_feature',$id);
        $data['featuresdata'] = $this->db->query('select * from manage_feature')->result_array();      
        $data['status'] = status();
        $data['faturetype'] = feature_type();
        $data['main_content'] = 'admin/feature/features';        
        $this->load->view('admin/template/template',$data);
    }

    public function feature_delete($id)
    {
        $del = $this->db->delete('manage_feature', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'feature');
        }
    }

    public function feature_details()   
    {
        $data['featureDeatils'] =  $this->db->query('select * from manage_feature_details')->result_array(); 
        $data['status'] = status();
        $data['main_content'] = 'admin/feature_details/feature-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_feature_details()
    {  
        if($this->input->post()) {
            $brand = array(
                    "title" => $this->input->post('title'),
                    "description" => $this->input->post('description'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );
            if (!empty($_FILES["icon"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["icon"]["name"];
                $tmp_name = $_FILES["icon"]["tmp_name"];
                $error = $_FILES["icon"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $brand['icon'] = $name;
            }

            $insert = $this->db->insert('manage_feature_details', $brand);               
            if ($insert) {
                $this->session->set_flashdata('success', 'Brand Successfully Saved');
                redirect(site_url().'feature-details');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'feature-details');
            }
        } 
        $data['status'] = status();
        $data['main_content'] = 'admin/feature_details/add-feature-details';        
        $this->load->view('admin/template/template',$data);
    }

    public function delete_feature($id)
    {
        $del = $this->db->delete('manage_feature_details', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'feature-details');
        }
    }

    public function feature_edit_details($id)
    {
        if($this->input->post()) {
            $brand = array(
                    "title" => $this->input->post('title'),
                    "description" => $this->input->post('description'),
                    "status" => 1,                 
                    "entry_by" => 1,                 
                    "ip_add" => $this->input->ip_address(),
                );
            if (!empty($_FILES["icon"]["name"])) {
                $name = 'IMG'."-". rand(1000, 100000).".".$_FILES["icon"]["name"];
                $tmp_name = $_FILES["icon"]["tmp_name"];
                $error = $_FILES["icon"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $brand['icon'] = $name;
            }
            $insert =  $this->db->update('manage_feature_details',$brand, array('id' => $id));
             
            if ($insert) {
                $this->session->set_flashdata('success', 'Brand Successfully Saved');
                redirect(site_url().'feature-details');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'feature-details');
            }
        } 
        $data['getValue'] = $this->Common_Model->set_data('manage_feature_details',$id);  
        $data['status'] = status();
        $data['main_content'] = 'admin/feature_details/add-feature-details';        
        $this->load->view('admin/template/template',$data);
    }

    public function testimonial_list()
    {
        $data['manageTestimonial'] =  $this->db->query('select * from manage_testimonial')->result_array(); 
        $data['status'] = status();
        $data['main_content'] = 'admin/testimonial/testimonial-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_testimonial()
    {
        if ($this->input->post()) {
            $testimonial = array(
                'heading1' => $this->input->post('heading1'),
                'heading2' => $this->input->post('heading2'),
                'rating' => $this->input->post('rating'),
                'name' => $this->input->post('name'),
                'designation' => $this->input->post('designation'),
                'description' => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );

            if (!empty($_FILES["photo"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["photo"]["name"];
                $tmp_name = $_FILES["photo"]["tmp_name"];
                $error = $_FILES["photo"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $testimonial['photo'] = $name;
            }
            if (!empty($_FILES["backgroundimage"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["backgroundimage"]["name"];
                $tmp_name = $_FILES["backgroundimage"]["tmp_name"];
                $error = $_FILES["backgroundimage"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $testimonial['backgroundimage'] = $name;
            }

            $insert = $this->db->insert('manage_testimonial', $testimonial);               
            if ($insert) {
                $this->session->set_flashdata('success', 'testimonial Successfully Saved');
                redirect(site_url().'testimonial');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'testimonial');
            }

        }
        $data['status'] = status();
        $data['main_content'] = 'admin/testimonial/add-testimonial';             
        $this->load->view('admin/template/template',$data);
    }

    public function edit_testimonial($id)
    {
        if ($this->input->post()) {
            $testimonial = array(
                'heading1' => $this->input->post('heading1'),
                'heading2' => $this->input->post('heading2'),
                'rating' => $this->input->post('rating'),
                'name' => $this->input->post('name'),
                'designation' => $this->input->post('designation'),
                'description' => $this->input->post('description'),
                "status" => 1,                 
                "entry_by" => 1,                 
                "ip_add" => $this->input->ip_address(),
            );

            if (!empty($_FILES["photo"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["photo"]["name"];
                $tmp_name = $_FILES["photo"]["tmp_name"];
                $error = $_FILES["photo"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $testimonial['photo'] = $name;
            }
            if (!empty($_FILES["backgroundimage"]["name"])) {
                $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["backgroundimage"]["name"];
                $tmp_name = $_FILES["backgroundimage"]["tmp_name"];
                $error = $_FILES["backgroundimage"]["error"];
                $path = 'uploads/gallery-image/'. $name;
                move_uploaded_file($tmp_name, $path);
                $testimonial['backgroundimage'] = $name;
            }
            $insert =  $this->db->update('manage_testimonial',$testimonial, array('id' => $id)); 
               
            if ($insert) {
                $this->session->set_flashdata('success', 'testimonial Successfully Saved');
                redirect(site_url().'testimonial');
            } else {
                $this->session->set_flashdata('success', 'Some error occured ');
                redirect(site_url().'testimonial');
            }

        }
        $data['getValue'] = $this->Common_Model->set_data('manage_testimonial',$id);
        $data['status'] = status();
        $data['main_content'] = 'admin/testimonial/add-testimonial';             
        $this->load->view('admin/template/template',$data);
    }

    public function delete_testimonial($id)
    {
        $del = $this->db->delete('manage_testimonial', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'testimonial');
        }
    }

    public function articles()
    {
        $data['articles_list'] =  $this->db->query('select * from articles')->result_array(); 
        $data['status'] = status();
        $data['main_content'] = 'admin/articles/articles-list';        
        $this->load->view('admin/template/template',$data);
    }

    public function add_articles()
    {
      if ($this->input->post()) {
          $article = array(
            'title' => $this->input->post('title'),
            'authorname' => $this->input->post('authorname'),
            'publishdate' => $this->input->post('publishdate'),
            'description' => $this->input->post('description'),
            "status" => 1,                 
            "entry_by" => 1,                 
            "ip_add" => $this->input->ip_address(),
          );

          if (!empty($_FILES["image"]["name"])) {
            $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image"]["name"];
            $tmp_name = $_FILES["image"]["tmp_name"];
            $error = $_FILES["image"]["error"];
            $path = 'uploads/gallery-image/'. $name;
            move_uploaded_file($tmp_name, $path);
            $article['image'] = $name;
        }

        $insert = $this->db->insert('articles', $article);               
        if ($insert) {
            $this->session->set_flashdata('success', 'Article Successfully Saved');
            redirect(site_url().'articles');
        } else {
            $this->session->set_flashdata('success', 'Some error occured.please try again...');
            redirect(site_url().'articles');
        }
      }
        $data['status'] = status();
        $data['main_content'] = 'admin/articles/add-aritcles';        
        $this->load->view('admin/template/template',$data);
    }

    public function edit_articles($id)
    {
        if ($this->input->post()) {
            $article = array(
              'authorname' => $this->input->post('authorname'),
              'publishdate' => $this->input->post('publishdate'),
              'description' => $this->input->post('description'),
              "status" => 1,                 
              "entry_by" => 1,                 
              "ip_add" => $this->input->ip_address(),
            );
  
            if (!empty($_FILES["image"]["name"])) {
              $name = 'IMG' . "-" . rand(1000, 100000).".".$_FILES["image"]["name"];
              $tmp_name = $_FILES["image"]["tmp_name"];
              $error = $_FILES["image"]["error"];
              $path = 'uploads/gallery-image/'. $name;
              move_uploaded_file($tmp_name, $path);
              $article['image'] = $name;
          }
          $insert =  $this->db->update('articles',$article, array('id' => $id));                      
          if ($insert) {
              $this->session->set_flashdata('success', 'Article Successfully Saved');
              redirect(site_url().'articles');
          } else {
              $this->session->set_flashdata('success', 'Some error occured.please try again...');
              redirect(site_url().'articles');
          }
        }
        $data['getValue'] = $this->Common_Model->set_data('articles',$id);
          $data['status'] = status();
          $data['main_content'] = 'admin/articles/add-aritcles';        
          $this->load->view('admin/template/template',$data);
    }

    public function delete_articles($id)
    {
        $del = $this->db->delete('articles', array('id' => $id));
        if(!empty($del)){
            redirect(site_url().'articles');
        } 
    }

    public function blog_details($id)
    {
        $data['articles_details'] =  $this->db->query('select * from articles where id="'.$id.'"')->result_array(); 

        $data['letest_artical'] =  $this->db->query('select * from articles ORDER BY id desc limit 4')->result_array(); 
     
        $this->load->view('frontend/about_details',$data);
    }

    public function blog()
    {
        $data['articles_list'] =  $this->db->query('select * from articles')->result_array();
        $data['status'] = status();
        $this->load->view('frontend/blog', $data);
    }

}

/* End of file Service.php */

?>