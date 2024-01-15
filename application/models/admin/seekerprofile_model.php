<?php
   class seekerprofile_model extends CI_Model
  {
  	public function insert($parameter)
  	{
  		$this->db->insert("jobseeker_profile",$parameter);
  	}
  	
    public function select()  
        {  
         //data is retrive from this query  
            $this->db->select('*');
            $this->db->from('jobseeker_profile');
            $this->db->where('is_delete','0');
        
         return $this->db->get()->result_array();  
        }  
         function deleteseekerr($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('email',$parameter);
        $this->db->update('jobseeker_profile');
      }
       function getseeker($parameter)
       {
         $this->db->select('*');
         $this->db->from('jobseeker_profile');
         $this->db->where('email',$parameter);
        
         return $this->db->get()->result_array();  
       }
       function updateseeker($id,$parameter)
       {
         $this->db->where('email',$id);
         $this->db->update('jobseeker_profile',$parameter);
       } 
  }

?>