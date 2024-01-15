<?php
 class candidate_profile_model extends CI_Model
 {
  public function select($email,$pass)
  {
     $this->db->select("jp.*,e.*");
    $this->db->from("users jp");
   
    $this->db->join("experience_details e","e.user_id=jp.user_id");
    
    $this->db->where("jp.email_id",$email);
    $this->db->where("jp.password",$pass);
    $this->db->where("jp.is_delete","0");
     return $this->db->get()->result_array(); 
      
  }
  public function selectdesi()
  {
    $query = "select designation_id,designation from designation";
        $res = $this->db->query($query);
        return $res->result();
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
   function updatecompany($id,$parameter,$description,$image,$dob,$city,$state,$country,$street,$desi,$pincode)
       {
        $this->db->set("jp.city_id",$city);
        $this->db->set("jp.state_id",$state);
        $this->db->set("jp.country_id",$country);
        $this->db->set("jp.street",$street);
        $this->db->set("jp.date_of_birth",$dob);
        $this->db->set("jp.user_image",$image);
        $this->db->set("jp.pincode",$pincode);
        $this->db->set("e.description",$description);
        $this->db->set("jp.city",$city);
    
    $this->db->join("experience_details e","e.user_id=jp.user_id");
   
         $this->db->where('jp.email_id',$id);
         $this->db->update('users jp',$parameter);
       } 
}
?>