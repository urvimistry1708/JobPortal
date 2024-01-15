<?php
   class userprofle_model extends CI_Model
   {
   
   	public function insert($parameter)
   	{
   		$this->db->insert("user_profile",$parameter);
   	}
   	function jobrole()
  {
     $query = "select distinct job_role_title,job_role_id from job_role";
     $res = $this->db->query($query);
     return $res->result();
  }
function designation()
{
     $query = "select distinct designation,designation_id from designation";
     $res = $this->db->query($query);
     return $res->result();
}
function select()
{
    $this->db->select("up.*,u.user_name,j.job_role_title,de.designation");
    $this->db->from("user_profile up");
     $this->db->where('up.is_delete','0');
    $this->db->join("users u","u.user_id=up.user_id");
    $this->db->join("designation de","de.designation_id=up.designation_id");
    $this->db->join("job_role j","up.job_role_id=j.job_role_id");
    
     return $this->db->get()->result_array();  
}
   
       function deleteuserprofile($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('user_profile_id',$parameter);
        $this->db->update('user_profile');
      }
       function getuserprofile($parameter)
       {
        
         $this->db->select("up.*,u.user_name,j.job_role_title,de.designation");
    $this->db->from("user_profile up");
     $this->db->where('user_profile_id',$parameter);
    $this->db->join("users u","u.user_id=up.user_id");
    $this->db->join("job_role j","up.job_role_id=j.job_role_id");
     $this->db->join("designation de","de.designation_id=up.designation_id");
    
        
         return $this->db->get()->result_array();  
       }
       function updateuserprofile($id,$parameter)
       {
         $this->db->where('user_profile_id',$id);
         $this->db->update('user_profile',$parameter);
       } 
}
?>