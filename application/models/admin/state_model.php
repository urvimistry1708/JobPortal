<?php
 class state_model extends CI_Model
 {
 	public function insert($parameter)
 	{
 		$this->db->insert("state",$parameter);
 	}
 	public function country()
 	{
 	 $query = "select  country_name,country_id from country";
     $res = $this->db->query($query);
     return $res->result();
 	}
 }

?>