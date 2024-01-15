<?php  
/**
 * 
 */
class Useraccount_model extends CI_Model{
	
	function insert($parameter)
	{

		$this->db->insert("users",$parameter);
	}

	function select()
	{
	   $this->db->select('u.*,c.city_name,s.state_name,co.country_name');
	   $this->db->from("users u");
	   $this->db->where("u.is_delete","0");
      $this->db->join('city c'," u.city_id=c.city_id ");
      $this->db->join('state s'," u.state_id=s.state_id");
      $this->db->join('country co'," u.country_id=co.country_id");
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
	
	 function deleteuser($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('user_id',$parameter);
        $this->db->update('users');
      }
       function getuser($parameter)
       {
        
      $this->db->select('u.*,c.city_name,s.state_name,co.country_name');
	   $this->db->from("users u");
     $this->db->where('u.user_id',$parameter);
     $this->db->join('city c'," u.city_id=c.city_id ");
      $this->db->join('state s'," u.state_id=s.state_id");
      $this->db->join('country co'," u.country_id=co.country_id");
     return $this->db->get()->result_array(); 
       }
       function updateuser($id,$parameter)
       {
         $this->db->where('user_id',$id);
         $this->db->update('users',$parameter);
       } 
}

 ?>