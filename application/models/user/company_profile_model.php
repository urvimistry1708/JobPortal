<?php
 class company_profile_model extends CI_Model
 {
 	public function select($emailid,$pass)
 	{
 	$this->db->select("*");
    $this->db->from("company_profile");
    $this->db->where("email",$emailid);
    $this->db->where("password",$pass);
     return $this->db->get()->result_array();
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
    function updatecompany($id,$parameter)
       {
         $this->db->where('email',$id);
         $this->db->update('company_profile',$parameter);
       } 
 }
?>