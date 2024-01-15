<?php
 class addResume_model extends CI_Model
 {
  public function getUser($email)
  {
     $this->db->select("jp.*");
    $this->db->from("users jp"); 
    $this->db->where("jp.email_id",$email);
    $this->db->where("jp.is_delete","0");
     return $this->db->get()->result_array(); 
      
  }
  public function insertEdu($para)
  {
    $this->db->insert("education_details",$para);
  }
  public function insertExp($exp)
  {
     $this->db->insert("experience_details",$exp);
  }
   public function insertskill($skill)
  {
     $this->db->insert("jobseeker_skill_set",$skill);
  }

   public function getCity($state_id)
  {
  
    $this->db->where('state_id',$state_id);
    $query=$this->db->get('city');
    $output='<option value="">&nbsp;</option>';
    foreach($query->result() as $row)
    {
      $output .='<option value="' . $row->city_id .'">' .$row->city_name .'</option>';
    }
     return $output;

  }
  
     public function selectsp()
  {
    $query = "select  specialization_id,specialization from specialization";
        $res = $this->db->query($query);
        return $res->result();
  }
   public function selectjt()
  {
    $query = "select  job_title_id,job_title from job_title";
        $res = $this->db->query($query);
        return $res->result();
  }
  public function selectdesi()
  {
    $query = "select  designation_id,designation from designation";
        $res = $this->db->query($query);
        return $res->result();
  }
  public function selectskill()
  {
    $query = "select  skill_id,skill_name from skill_set";
        $res = $this->db->query($query);
        return $res->result();
  }
  public function getState($country_id)
  {
 
    $this->db->where('country_id',$country_id);
    $query=$this->db->get('state');
    $output='<option value="">&nbsp;</option>';
    foreach($query->result() as $row)
    {
      $output .='<option value="' . $row->state_id .'">' .$row->state_name .'</option>';
    }
     return $output;
  }

  public function getCountry()
  {
 
    return $this->db->get("country")->result_array();
  } 
}
?>
