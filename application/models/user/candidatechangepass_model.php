<?php  

class candidatechangepass_model extends CI_Model{
	public function change($old,$new,$email_id)
	{
		$this->db->set('password',$new);
		$this->db->where('email',$email_id);
		$this->db->where('password',$old);
		$this->db->update('jobseeker_profile');
	}

}
?>