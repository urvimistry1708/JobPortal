<?php
 class managejob_model extends CI_Model
 {
 	public function selectjob($id)
  	{
  	
    $this->db->select("j.*,jt.*,c.*,rs.*");
    $this->db->from("job j");
    $this->db->join("company_profile c","c.company_profile_id=j.company_profile_id");
    $this->db->join("job_title jt","jt.job_title_id=j.job_title_id");
    $this->db->join("require_skills rs","rs.require_skill_id=j.require_skill_id");
    $this->db->where("c.email",$id);
 
    $this->db->where("j.is_delete","0");
     return $this->db->get()->result_array(); 
  	}
    public function JobTitle()
    {
       $query = "select  job_title_id,job_title from job_title";
        $res = $this->db->query($query);
        return $res->result();
    }
     public function skills()
    {
       $query = "select  require_skill_id,require_skill from require_skills";
        $res = $this->db->query($query);
        return $res->result();
    }
    public function getjob($id)
    {
    
    $this->db->select("j.*,jt.*,c.*,rs.*");
    $this->db->from("job j");
    $this->db->join("company_profile c","c.company_profile_id=j.company_profile_id");
    $this->db->join("job_title jt","jt.job_title_id=j.job_title_id");
    $this->db->join("require_skills rs","rs.require_skill_id=j.require_skill_id");
    $this->db->where("j.job_id",$id);
 
    $this->db->where("j.is_delete","0");
     return $this->db->get()->result_array(); 
    }
  	function deletejob($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('job_id',$parameter);
        $this->db->update('job');
      }
      function updateJob($id,$parameter)
       {
         $this->db->where('job_id',$id);
         $this->db->update('job',$parameter);
       } 
 }
 ?>