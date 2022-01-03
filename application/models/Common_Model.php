<?php
class Common_Model extends CI_Model{
	public function getData($tbl)
	{
		$query=$this->db->get($tbl);
        $count=$query->num_rows();
        if($count>0)
         return $query->result_array();
        else
         return FALSE;
	}
	public function getDataby($tbl,$data)
	{
		$query  =  $this->db->get_where($tbl,$data)->result_array();
        //echo $this->db->last_query();die;
        // $count=$query->num_rows();
        // if($count>0)
        return $query;
        // else
        //  return FALSE;
	}
 
    public function gettablelist($tbl)
	{
        $this->db->order_by("id", "desc");
        $query=$this->db->get($tbl);
        return $query->result_array();
        
	}
    function set_data($table, $id)
        {
            $query=$this->db->get_where($table, array('id' => $id));;
            return $query->row_array();
        }
        function update_data($table, $data, $id){	
            $data =  $this->db->update($table, $data, array('id' => $id));
            return $data;
          
        }
}
?>