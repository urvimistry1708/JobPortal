
<?php
 class browsecandidate_model extends CI_Model
 {
	public function select()
  	{
  	$this->db->select("jp.*,s.specialization,exp.*,jt.*,st.state_name");
    $this->db->from("users jp");
    $this->db->join("education_details e","e.user_id=jp.user_id");
    $this->db->join("experience_details exp","exp.user_id=jp.user_id");
    $this->db->join("specialization s","s.specialization_id=e.specialization_id");
        $this->db->join("state st","st.state_id=jp.state_id");
    $this->db->join("job_title jt","jt.job_title_id=exp.job_title_id");
   // $this->db->where("jp.is_delete","0");
     return $this->db->get()->result_array(); 
      
  	}
    public function paging($page1)
    {
       $this->db->select("jp.*,s.specialization,exp.*,jt.*,st.state_name");
    $this->db->from("users jp");
    $this->db->join("education_details e","e.user_id=jp.user_id");
    $this->db->join("experience_details exp","exp.user_id=jp.user_id");
    $this->db->join("specialization s","s.specialization_id=e.specialization_id");
        $this->db->join("state st","st.state_id=jp.state_id");
    $this->db->join("job_title jt","jt.job_title_id=exp.job_title_id");
    $this->db->limit($page1,"3");
     return $this->db->get()->result_array(); 
    }
     public function selectjob()
    
  {
    $query = "select  job_title_id,job_title from job_title";
    $res = $this->db->query($query);
    return $res->result();
  }
  public function selectsp()
  {
     $query = "select  specialization_id,specialization from specialization";
    $res = $this->db->query($query);
    return $res->result();
  }
     public function search($dpto)
    {
    $this->db->select("jp.*,s.specialization,exp.*,jt.*,st.state_name");
    $this->db->from("users jp");
    $this->db->join("education_details e","e.user_id=jp.user_id");
    $this->db->join("experience_details exp","exp.user_id=jp.user_id");
    $this->db->join("specialization s","s.specialization_id=e.specialization_id");
       $this->db->join("state st","st.state_id=jp.state_id");
    $this->db->join("job_title jt","jt.job_title_id=exp.job_title_id");
    $this->db->where("exp.job_title_id",$dpto);
     return $this->db->get()->result_array();
    
    }
       public function searchsp($sp)
  {
     $this->db->select("jp.*,s.specialization,exp.*,jt.*,st.state_name");
    $this->db->from("users jp");
    $this->db->join("education_details e","e.user_id=jp.user_id");
    $this->db->join("experience_details exp","exp.user_id=jp.user_id");
    $this->db->join("specialization s","s.specialization_id=e.specialization_id");
    $this->db->join("state st","st.state_id=jp.state_id");
    $this->db->join("job_title jt","jt.job_title_id=exp.job_title_id");
    $this->db->where("e.specialization_id",$sp);
     return $this->db->get()->result_array();
  }

 }
 ?>