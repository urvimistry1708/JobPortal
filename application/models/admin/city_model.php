<?php
 class city_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("city",$parameter);
 	}
 	public function state()
 	{
 	 $query = "select  state_name,state_id from state";
     $res = $this->db->query($query);
     return $res->result();
 	}
 	 
 }

?>