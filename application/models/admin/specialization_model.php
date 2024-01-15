
<?php
 class specialization_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("specialization",$parameter);
 	}
 	function select()
	{
		$this->db->select('*');
		$this->db->from('specialization');
		$this->db->where('is_delete','0');

		 return $this->db->get()->result_array();
	}

	function deletespecialization($parameter)
	{
		$this->db->set('is_delete','1');
		$this->db->where('specialization_id',$parameter);
		$this->db->update('specialization');
	}

	function getspecialization($parameter)
	{
		$this->db->select('*');
		$this->db->from('specialization');
		$this->db->where('specialization_id',$parameter);
		 return $this->db->get()->result_array();
		
	}

	function updatespecialization($id,$parameter)
	{
      $this->db->where('specialization_id',$id);
		$this->db->update('specialization',$parameter);
	}
 }

?>