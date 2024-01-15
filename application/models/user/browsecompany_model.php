
<?php
 class browsecompany_model extends CI_Model
 {
	public function select()
  	{
  	$this->db->select("c.*");
    $this->db->from("company_profile c");
    
    $this->db->where("c.is_delete","0");
     return $this->db->get()->result_array(); 
      
  	}
    public function selectcompanyy($eid)
    {
    $this->db->select("c.company_profile_id");
    $this->db->from("company_profile c");
    
    $this->db->where("c.email",$eid);
     return $this->db->get()->result_array(); 
      
    }
    public function filtercompany($arr)
    {
     $sql="select * from company_profile where company_name like '$arr%'";
    $res=$this->db->query($sql);
    return $res->result_array();
    
      
    }
  	public function selectcompany($name)
  	{
  	$this->db->select("j.*,jt.job_title,cp.*,s.*");
    $this->db->from("job j");
     $this->db->join('job_title jt','jt.job_title_id=j.job_title_id');
    $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
    $this->db->join("state s","s.state_id=cp.state_id");
    $this->db->where("j.is_delete","0");
     $this->db->where("cp.company_profile_id",$name);
     return $this->db->get()->result_array(); 
  	}
  	public function disp($id)
  	{
       $this->db->select("c.*");
    $this->db->from("company_profile c");
    
    $this->db->where("c.is_delete","0");
     $this->db->where("c.company_profile_id",$id);
     return $this->db->get()->result_array(); 
  	}
  }
?>