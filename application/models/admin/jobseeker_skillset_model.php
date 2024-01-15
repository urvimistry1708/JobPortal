<?php
 class jobseeker_skillset_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("jobseeker_skill_set",$parameter);
 	}
 	
    public function select()
  	{
  	$this->db->select("j.*,u.user_name,s.skill_name,j.seeker_skillset_id");
    $this->db->from("jobseeker_skill_set j");
    $this->db->where('j.is_delete','0');
     $this->db->join("users u","u.user_id=j.user_id");
    $this->db->join("skill_set s","s.skill_id=j.skill_id");
    return $this->db->get()->result_array();
  	}
  	public function skillset()
 	{
 	 // $query = "select  skill_id,skill_name from skill_set";
   //   $res = $this->db->query($query);
      return $this->db->get('skill_set')->result_array();
 	}
 	public function users()
 	{
 	 // $query = "select  user_id,user_name from users";
   //   $res = $this->db->query($query);
      return $this->db->get('users')->result_array();
 	}
 

  function deleteseekerskill($parameter)
  {
    $this->db->set('is_delete','1');
    $this->db->where('seeker_skillset_id',$parameter);
    $this->db->update('jobseeker_skill_set');
  }

  function getseekerskill($parameter)
  {
      $this->db->select("j.*,u.user_name,s.skill_name");
    $this->db->from("jobseeker_skill_set j");
    $this->db->where('j.seeker_skillset_id',$parameter);
     $this->db->join("users u","u.user_id=j.user_id");
    $this->db->join("skill_set s","s.skill_id=j.skill_id");
    return $this->db->get()->result_array();
  }

  function updateseekerskill($id,$parameter)
  {
      $this->db->where('seeker_skillset_id',$id);
    $this->db->update('jobseeker_skill_set',$parameter);
  }
 }
 
?>