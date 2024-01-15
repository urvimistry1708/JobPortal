<?php
   class jobseeker_model extends CI_Model
  {
  	public function insert($parameter)
  	{
  		$this->db->insert("jobseeker_profile",$parameter);
  	}
  	public function insertuser($parameter)
  	{
  		$this->db->insert("loginuser",$parameter);
  	}
    public function insertUsers($para)
    {
      $this->db->insert("users",$para);
    }
}
?>