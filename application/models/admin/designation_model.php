<?php
 class designation_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("designation",$parameter);
 	}
 	public function select()  
        {  
         //data is retrive from this query  
            $this->db->select('*');
            $this->db->from('designation');
            $this->db->where('is_delete','0');
        
         return $this->db->get()->result_array();  
        }  
         function deletedesi($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('designation_id',$parameter);
        $this->db->update('designation');
      }
       function getdesi($parameter)
       {
         $this->db->select('*');
         $this->db->from('designation');
         $this->db->where('designation_id',$parameter);
        
         return $this->db->get()->result_array();  
       }
       function updatedesi($id,$parameter)
       {
         $this->db->where('designation_id',$id);
         $this->db->update('designation',$parameter);
       } 
 }

?>