<?php
 class companyprofile_model extends CI_Model
 {
 	function insert($parameter)
 	{
 		$this->db->insert("company_profile",$parameter);
 	}
 	public function select()
  	{
  		
  		 $this->db->select('cp.*,c.*,s.*,co.*');
            $this->db->from('company_profile cp');
          
             $this->db->join('city c'," cp.city_id=c.city_id ");
      $this->db->join('state s'," cp.state_id=s.state_id");
      $this->db->join('country co'," cp.country_id=co.country_id");
        $this->db->where('cp.is_delete','0');
        
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
  	public function deletecompany($parameter)
  	{
  		 $this->db->set('is_delete','1');
        $this->db->where('company_profile_id',$parameter);
        $this->db->update('company_profile');
  	}
  	function getcompany($parameter)
       {
         $this->db->select('cp.*,c.*,s.*,co.*');
         $this->db->from('company_profile cp');
         $this->db->where('company_profile_id',$parameter);
          $this->db->join('city c'," cp.city_id=c.city_id ");
      $this->db->join('state s'," cp.state_id=s.state_id");
      $this->db->join('country co'," cp.country_id=co.country_id");
         return $this->db->get()->result_array();  
       }
       function updatecompany($id,$parameter)
       {
         $this->db->where('company_profile_id',$id);
         $this->db->update('company_profile',$parameter);
       } 
 }

?>