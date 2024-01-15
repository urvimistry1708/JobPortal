<?php
    class question_model extends CI_Model
    {
    	function insert($parameter)
    	{
    		$this->db->insert("questions",$parameter);
    	}
    	
        public function select()  
        {  
         //data is retrive from this query  
            $this->db->select('*');
            $this->db->from('questions');
            $this->db->where('is_delete','0');
        
         return $this->db->get()->result_array();  
        }  
       function deleteque($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('question_id',$parameter);
        $this->db->update('questions');
      }
       function getquestion($parameter)
       {
         $this->db->select('*');
         $this->db->from('questions');
         $this->db->where('question_id',$parameter);
        
         return $this->db->get()->result_array();  
       }
       function updatequestion($id,$parameter)
       {
         $this->db->where('question_id',$id);
         $this->db->update('questions',$parameter);
       } 
    }
?>