 
<?php
	class delete_model extends CI_Model{   

        public function delete_page($table, $id){
            $this->db->delete($table, array('id' => $id));
        }
    }
?>