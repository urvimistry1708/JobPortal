<?php
 class service_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("services",$parameter);
 	}
 	public function select()  
        {  
         //data is retrive from this query  
            $this->db->select('*');
            $this->db->from('services');
            $this->db->where('is_delete','0');
        
         return $this->db->get()->result_array();  
        }  
         function deleteservice($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('service_id',$parameter);
        $this->db->update('services');
      }
       function getservice($parameter)
       {
         $this->db->select('*');
         $this->db->from('services');
         $this->db->where('service_id',$parameter);
        
         return $this->db->get()->result_array();  
       }
       function updateservice($id,$parameter)
       {
         $this->db->where('service_id',$id);
         $this->db->update('services',$parameter);
       } 
 }
 

?>