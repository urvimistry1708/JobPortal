<?php
 class jobtitle_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("job_title",$parameter);
 	}
 	function select()
	{
		$this->db->select('*');
		$this->db->from('job_title');
		$this->db->where('is_delete','0');

		 return $this->db->get()->result_array();
	}

	function deletejobtitle($parameter)
	{
		$this->db->set('is_delete','1');
		$this->db->where('job_title_id',$parameter);
		$this->db->update('job_title');
	}

	function getjobtitle($parameter)
	{
		$this->db->select('*');
		$this->db->from('job_title');
		$this->db->where('job_title_id',$parameter);
		 return $this->db->get()->result_array();
		
	}

	function updatejobtitle($id,$parameter)
	{
      $this->db->where('job_title_id',$id);
		$this->db->update('job_title',$parameter);
	}
 }

?>