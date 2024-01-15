<?php
    class Skillset_model extends CI_Model
    {
    	public function insert($parameter)
    	{
    		$this->db->insert("skill_set",$parameter);
    	}
    	public function select()  
        {  
         //data is retrive from this query  
            $this->db->select('*');
            $this->db->from('skill_set');
            $this->db->where('is_delete','0');
        
         return $this->db->get()->result_array();  
        }  
       function deleteskill($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('skill_id',$parameter);
        $this->db->update('skill_set');
      }
       function getskill($parameter)
       {
         $this->db->select('*');
         $this->db->from('skill_set');
         $this->db->where('skill_id',$parameter);
        
         return $this->db->get()->result_array();  
       }
       function updateskill($id,$parameter)
       {
         $this->db->where('skill_id',$id);
         $this->db->update('skill_set',$parameter);
       } 
    }
?>