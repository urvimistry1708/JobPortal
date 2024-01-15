<?php
 class jobrole_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("job_role",$parameter);
 	}
 	function select()
	{
		$this->db->select('*');
		$this->db->from('job_role');
		$this->db->where('is_delete','0');

		 return $this->db->get()->result_array();
	}

	function deletejobrole($parameter)
	{
		$this->db->set('is_delete','1');
		$this->db->where('job_role_id',$parameter);
		$this->db->update('job_role');
	}

	function getjobrole($parameter)
	{
		$this->db->select('*');
		$this->db->from('job_role');
		$this->db->where('job_role_id',$parameter);
		 return $this->db->get()->result_array();
		
	}

	function updatejobrole($id,$parameter)
	{
      $this->db->where('job_role_id',$id);
		$this->db->update('job_role',$parameter);
	}
 }

?>