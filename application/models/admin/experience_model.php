<?php
 class experience_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("experience_details",$parameter);
 	}
 	public function jobtitle()
 	{
 	 $query = "select  job_title_id,job_title from job_title";
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
 	function select()
 {
    $this->db->select("exp.*,j.job_title,cty.*,st.*,c.*");
    $this->db->from("experience_details exp");
     $this->db->where('exp.is_delete','0');
    $this->db->join("city cty","cty.city_id=exp.job_city_id");
    $this->db->join("state st","st.state_id=exp.job_state_id");
    $this->db->join("country c","c.country_id=exp.job_country_id");
    $this->db->join("job_title j","exp.job_title_id=j.job_title_id");
    return $this->db->get()->result_array(); 
 }
  function deleteexperience($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('experience_id',$parameter);
        $this->db->update('experience_details');
      }
       function getexperience($parameter)
       {
        
    
     $this->db->select("exp.*,cty.*,st.*,c.*,j.job_title");
    $this->db->from("experience_details exp");
     $this->db->where('exp.experience_id',$parameter);
    $this->db->join("city cty","cty.city_id=exp.job_city_id");
    $this->db->join("state st","st.state_id=exp.job_state_id");
    $this->db->join("country c","c.country_id=exp.job_country_id");
    $this->db->join("job_title j","exp.job_title_id=j.job_title_id");
    return $this->db->get()->result_array();  
       }
       function updateexperience($id,$parameter)
       {
         $this->db->where('experience_id',$id);
         $this->db->update('experience_details',$parameter);
       } 
 	
 }

?>