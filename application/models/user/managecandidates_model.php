<?php
 class managecandidates_model extends CI_Model
 {
	public function select($para)
  	{
  	$this->db->select("jp.*,s.specialization,exp.*,jt.*,job.*,cp.*");
    $this->db->from("users jp");
    $this->db->join("education_details e","e.user_id=jp.user_id");
    $this->db->join("experience_details exp","exp.user_id=jp.user_id");
    $this->db->join("specialization s","s.specialization_id=e.specialization_id");
   
    $this->db->join("job_applied ja","ja.user_id=jp.user_id");
    $this->db->join("job job","job.job_id=ja.job_id");
    $this->db->join("job_title jt","jt.job_title_id=job.job_title_id");
    $this->db->join("company_profile cp","cp.company_profile_id=job.company_profile_id");

   $this->db->where("cp.email",$para);
     return $this->db->get()->result_array(); 
      
  	}
  }
?>