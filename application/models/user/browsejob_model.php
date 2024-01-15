<?php
 class browsejob_model extends CI_Model
 {
	public function select()
  	{
  	$this->db->select("j.*,jt.job_title,cp.*");
    $this->db->from("job j");
     $this->db->join('job_title jt','jt.job_title_id=j.job_title_id');
    $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
    //$this->db->where("jt.job_title",$para);
     $this->db->where("j.is_delete","0");
     return $this->db->get()->result_array(); 
  	}
    public function add($para)
  {
        $this->db->insert("job_applied",$para);
  }
    public function selectUser($para)
    {
    $this->db->select("user_id");
    $this->db->from("users");
    $this->db->where("email_id",$para);
     $this->db->where("is_delete","0");
     return $this->db->get()->result_array(); 
    }
      public function selectjob()
  {
    $query = "select  job_title_id,job_title from job_title";
        $res = $this->db->query($query);
        return $res->result();
  }
  public function searchsalary($searchsalary)
  {
    $this->db->select("j.*,jt.job_title,cp.*");
    $this->db->from("job j");
     $this->db->join('job_title jt','jt.job_title_id=j.job_title_id');
    $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
    $this->db->where("j.salary_range",$searchsalary);
    // $this->db->where("j.is_delete","0"); 
     return $this->db->get()->result_array();
  }
  public function searchjobtype($jobtype)
  {
    $this->db->select("j.*,jt.job_title,cp.*");
    $this->db->from("job j");
     $this->db->join('job_title jt','jt.job_title_id=j.job_title_id');
    $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
    $this->db->where("j.job_type",$jobtype);
    // $this->db->where("j.is_delete","0"); 
     return $this->db->get()->result_array(); 
  }
    public function search($dpto)
    {
      $this->db->select("j.*,jt.job_title,cp.*");
    $this->db->from("job j");
     $this->db->join('job_title jt','jt.job_title_id=j.job_title_id');
    $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
    $this->db->where("j.job_title_id",$dpto);
    // $this->db->where("j.is_delete","0"); 
     return $this->db->get()->result_array(); 
    
    }
    public function searchjobb($searchloc)
    {
      $this->db->select("j.*,jt.job_title,cp.*");
    $this->db->from("job j");
     $this->db->join('job_title jt','jt.job_title_id=j.job_title_id');
    $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
    $this->db->where("j.job_location",$searchloc);
    // $this->db->where("j.is_delete","0"); 
     return $this->db->get()->result_array(); 
    }
  }
?>