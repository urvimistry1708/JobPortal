<?php
 class education_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("education_details",$parameter);
 	}
 	public function specialization()
 	{
 	 $query = "select  specialization_id,specialization from specialization";
     $res = $this->db->query($query);
     return $res->result();
 	}
 	public function select()
  	{
  	$this->db->select("edu.*,sp.specialization");
    $this->db->from("education_details edu");
     $this->db->where('edu.is_delete','0');
    $this->db->join("specialization sp","sp.specialization_id=edu.specialization_id");
     return $this->db->get()->result_array(); 
  	}
  	 function deleteeducationdetails($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('education_id',$parameter);
        $this->db->update('education_details');
      }
       function geteducationdetails($parameter)
       {
         // $this->db->select('*');
         // $this->db->from('user_profile');
         // $this->db->where('user_profile_id',$parameter);
      $this->db->select("edu.*,sp.specialization");
    $this->db->from("education_details edu");  
     $this->db->where('edu.education_id',$parameter);
     $this->db->join("specialization sp","sp.specialization_id=edu.specialization_id");
        
         return $this->db->get()->result_array();  
       }
       function updateeducationdetails($id,$parameter)
       {
         $this->db->where('education_id',$id);
         $this->db->update('education_details',$parameter);
       } 
 }

?>