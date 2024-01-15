<?php
 class country_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("country",$parameter);
 	}
 	function select()
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('is_delete','0');

		 return $this->db->get()->result_array();
	}

	function deletecountry($parameter)
	{
		$this->db->set('is_delete','1');
		$this->db->where('country_id',$parameter);
		$this->db->update('country');
	}

	function getcountry($parameter)
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('country_id',$parameter);
		 return $this->db->get()->result_array();
		
	}

	function updatecountry($id,$parameter)
	{
      $this->db->where('country_id',$id);
		$this->db->update('country',$parameter);
	}
 }

?>