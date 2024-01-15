<?php
 class job_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("job",$parameter);
 	}
  public function company()
  {
    $query = "select  company_profile_id,company_name from company_profile";
        $res = $this->db->query($query);
        return $res->result();
  }
 	public function job_title()
 	{
 		$query = "select  job_title_id,job_title from job_title";
        $res = $this->db->query($query);
        return $res->result();
 	}
 	public function getrskill() {
	 	$sql="select distinct require_skill_id, require_skill from require_skills";
	 	$res=$this->db->query($sql);
	 	return $res->result();
		
	}
	public function select()
  	{
  	$this->db->select("j.*,jt.job_title,rs.require_skill,cp.company_name");
    $this->db->from("job j");
     $this->db->where('j.is_delete','0');
    $this->db->join("job_title jt","jt.job_title_id=j.job_title_id");
    $this->db->join("require_skills rs","rs.require_skill_id=j.require_skill_id");
     $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
   return $this->db->get()->result_array();  
   }

  	
   
       function deletejob($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('job_id',$parameter);
        $this->db->update('job');
      }
       function getjob($parameter)
       {
        
        
     $this->db->select("j.*,jt.job_title,rs.require_skill,cp.company_name");
    $this->db->from("job j");
      $this->db->where('j.job_id',$parameter);
    $this->db->join("job_title jt","jt.job_title_id=j.job_title_id");
    $this->db->join("require_skills rs","rs.require_skill_id=j.require_skill_id");
      $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
   return $this->db->get()->result_array();  
    
       }
       function updateJob($id,$parameter)
       {
         $this->db->where('job_id',$id);
         $this->db->update('job',$parameter);
       } 
 }

?>