<?php
 class companyprofile_model extends CI_Model
 {
 	function insert($parameter)
 	{
 		$this->db->insert("company_profile",$parameter);
 	}
 	public function insertuser($parameter)
  	{
  		$this->db->insert("loginuser",$parameter);
  	}
  	public function countEployer()
  	{
  		// $this->db->select("count(ja.user_id)");
  		// $this->db->from("job_applied ja");
  		// $this->db->join("users u","ja.user_id=u.user_id");
  		// $this->db->join("job j","j.job_id=ja.job_id");
  		// $this->db->join("company_profile cp","cp.company_profile_id=j.company_profile_id");
  		return $this->db->count_all('company_profile');
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