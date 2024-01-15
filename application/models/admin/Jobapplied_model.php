<?php

class Jobapplied_model extends CI_Model{
	
	function insert($parameter){

		$this->db->insert("job_applied",$parameter);
	}

	  function getuser() {
	 	$sql="select distinct user_id, user_name from users";
	 	$res=$this->db->query($sql);
	 	return $res->result();
		
	}
	 function getjob() {
	 	$sql="select distinct job_title_id, job_title from job_title";
	 	$res=$this->db->query($sql);
	 	return $res->result();
		
	}
	public function select()
  	{
  	$this->db->select("ja.*,u.user_name,jt.job_title");
    $this->db->from("job_applied ja");
    $this->db->where("ja.is_delete","0");
    $this->db->join("users u","ja.user_id=u.user_id");
   
     $this->db->join("job_title jt","jt.job_title_id=ja.job_id");
   return $this->db->get()->result_array(); 
  	}
  	 function deletejobapplied($parameter)
      {
        $this->db->set('is_delete','1');
        $this->db->where('job_applied_id',$parameter);
        $this->db->update('job_applied');
      }
       function getjobapplied($parameter)
       {
         // $this->db->select('*');
         // $this->db->from('user_profile');
         // $this->db->where('user_profile_id',$parameter);
      $this->db->select("ja.*,u.user_name,jt.job_title");
    $this->db->from("job_applied ja");
     $this->db->where('ja.job_applied_id',$parameter);
     $this->db->join("users u","ja.user_id=u.user_id");
   
     $this->db->join("job_title jt","jt.job_title_id=ja.job_id");
   return $this->db->get()->result_array(); 
       }
       function updatejobapplied($id,$parameter)
       {
         $this->db->where('job_applied_id',$id);
         $this->db->update('job_applied',$parameter);
       } 
}


?>