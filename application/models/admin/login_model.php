<?php  
/**
 * 
 */
class login_model extends CI_Model{
	
  public function loadsignin($email_id,$password)
   {

	   $this->db->select('*');
	   $this->db->from("loginuser");
      $this->db->where('email_id',$email_id);
      $this->db->where('password',$password);
    $q=$this->db->get();
    return $q->num_rows(); 
   }
}

 ?>