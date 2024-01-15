<?php
 class question_answers_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("question_answers",$parameter);
 	}
 	public function select()
 	{
 		$this->db->select('q.question_title,qa.answer,qa.answer_id');
 		$this->db->from('question_answers qa');
 		
 		$this->db->join('questions q','q.question_id=qa.question_id');
 		$this->db->where('qa.is_delete','0');
 		 return $this->db->get()->result_array();
  	}
 	public function question()
 	{
 	 $query = "select  question_title,question_id from questions";
     $res = $this->db->query($query);
     return $res->result();
 	}
 	
       function deleteans($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('answer_id',$parameter);
        $this->db->update('question_answers');
      }
       function getanswer($parameter)
       {
         $this->db->select('qa.*,q.question_title');
         $this->db->from('question_answers qa');
         $this->db->join('questions q','q.question_id=qa.question_id');
         $this->db->where('answer_id',$parameter);
        
         return $this->db->get()->result_array();  
       }
       function updateanswer($id,$parameter)
       {
         $this->db->where('answer_id',$id);
         $this->db->update('question_answers',$parameter);
       } 
 }
 

?>