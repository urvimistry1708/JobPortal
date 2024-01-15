
<?php
 class upload_resume_model extends CI_Model
 {
 	public function getusername($id)
 	{
        $this->db->select("*");
       $this->db->from("users"); 
       $this->db->where("email_id",$id);
       $this->db->where("is_delete","0");
       return $this->db->get()->result_array(); 
 	}   
 	public function getedu($idd)
 	{
       $this->db->select("edu.*,sp.*");
       $this->db->from("education_details edu");
        $this->db->join("specialization sp","sp.specialization_id=edu.specialization_id"); 
        $this->db->join("users u","u.user_id=edu.user_id");
       $this->db->where("edu.user_id",$idd);
       $this->db->where("edu.is_delete","0");
       return $this->db->get()->result_array(); 
 	}
 	public function getexp($iddd)
 	{
        $this->db->select("e.*,jt.*,d.*");
       $this->db->from("experience_details e"); 
       $this->db->join("job_title jt","jt.job_title_id=e.job_title_id");
       $this->db->join("designation d","d.designation_id=e.designation_id");
        $this->db->join("users u","u.user_id=e.user_id");
       $this->db->where("e.user_id",$iddd);
       $this->db->where("e.is_delete","0");
       return $this->db->get()->result_array(); 
 	}
 	public function getskill($id)
 	{
 		 $this->db->select("j.*,s.*");
       $this->db->from("jobseeker_skill_set j"); 
        $this->db->join("users u","u.user_id=j.user_id");
         $this->db->join("skill_set s","s.skill_id=j.skill_id");
       $this->db->where("j.user_id",$id);
       $this->db->where("j.is_delete","0");
       return $this->db->get()->result_array(); 
 		
 	}
 }
 ?>