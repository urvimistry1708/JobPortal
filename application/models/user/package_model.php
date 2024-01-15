
<?php
 class package_model extends CI_Model
 {
 	public function getPackage()
 	{
 		$this->db->select("*");
    $this->db->from("package");
  
     return $this->db->get()->result_array(); 
 	}
 	public function add($para)
 	{
        $this->db->insert("booking",$para);
 	}
 	public function select($email)
 	{
 		$this->db->select("b.booking_id,p.package_price,p.package_type,c.company_name,c.email,c.contact,b.create_date,c.street");
    $this->db->from("booking b");
    $this->db->join("package p","p.package_id=b.package_id");
    $this->db->join("company_profile c","c.company_profile_id=b.company_profile_id");
    $this->db->where("b.email",$email);
     return $this->db->get()->result_array(); 
 	}
 }
?>