 <?php
	class edit_model extends CI_Model{   

        function modify_data($table, $id){	
           $data =  $this->db->get_where($table, array('id' => $id))->row_array();
           return $data;         
        }

        function update_data($table, $data, $id){	
           $data =  $this->db->update($table, $data, array('id' => $id));
           return $data;
         
         }
        
      
     
      function   is_email_available1($email)  
      {  
           $this->db->where('email', $email);  
           $query = $this->db->get("manage_admin");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      } 
   

        

   }  
?>