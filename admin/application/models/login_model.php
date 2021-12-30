 
<?php
	class login_model extends CI_Model{          
        public function isvalidate($username, $password){
            $query = $this->db->get_where('manage_admin', ['email'=> $username, 'password'=>md5($password)]);

            return $query->row_array();
        }
    }
?>