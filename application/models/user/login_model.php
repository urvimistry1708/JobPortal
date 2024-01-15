<?php  

class login_model extends CI_Model{


function loadsignin($username,$password)
	{

		$this->db->select("*");
    $this->db->from("users");
    $this->db->where('email_id',$username);
    $this->db->where('password',$password);
    $q=$this->db->get();
     return $q->num_rows(); 
	}
    function loadsigninemp($username,$password)
	{

		$this->db->select("*");
    $this->db->from("company_profile");
    $this->db->where('email',$username);
    $this->db->where('password',$password);
    $q=$this->db->get();
     return $q->num_rows(); 
	}
	public function add($id)
	{
	
  		$this->db->insert("login_details",$id);
  	
	}
	 function select($id)
	 {
	 	$this->db->select('user_id');
	   $this->db->from("users");
      $this->db->where('email_id',$id);
     return $this->db->get->result_array();
	 }
public function emailCheck($email_id)
{
	 $this->db->select('*');
	   $this->db->from("jobseeker_profile");
      $this->db->where('email',$email_id); 
    $q=$this->db->get();
    return $q->num_rows();  
}
public function emailCheckEmployee($email_id)
{
	 $this->db->select('*');
	   $this->db->from("company_profile");
      $this->db->where('email',$email_id);
     
    $q=$this->db->get();
    return $q->num_rows();  
}
  public function send_mail($email)
	{
		$otp = rand(1000,9999);
		$_SESSION['otp']=$otp;
	
		$config=array('protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_timeout' => '30',
		'smtp_user' => 'jobbuzz2019@gmail.com',
		'smtp_pass' => 'jobbuzz1817',
		'charset' => 'utf-8',
		'newline' => "\r\n",
		'wordwrap' => TRUE,
		'mailtype' => 'html');
		
		$this->load->library('email',$config);

		$this->email->set_newline("\r\n");
		
		$this->email->from("jobbuzz2019@gmail.com","JobBuzz");

		$this->email->to($email);

		$this->email->subject("Password Recovery");

		$formattedMsg = "<center><h1 style='color:White;background:DodgerBlue'>JobBuzz</h1></center><br>
			<p style='color:White;background:DodgerBlue;font-size:large;font-weight:bold;'>Hello,your OTP is ".$otp."</p>
		<p style='color:White;background:DodgerBlue;font-size:large;font-weight:bold;'>
        For any query you can contact us on jobbuzz2019@gmail.com
		</p>
		";		


		$this->email->message($formattedMsg);

		//$this->email->attach(FCPATH . 'Pictures/photo.jpg' );

		if($this->email->send())
		{
			//echo "Email has been sent! Thank you!";
		}
		else
		{
			echo $this->email->print_debugger();
		}
	}
	public function updatePassworduser($email_id,$password,$data)
	{
		$this->db->set('password',$password);
		$this->db->where('email_id',$email_id);
		$this->db->update('users',$data);
	}
	public function updatePassword($email_id,$password,$data)
	{
		$this->db->set('password',$password);
		$this->db->where('email',$email_id);
		$this->db->update('jobseeker_profile',$data);
	}
	public function updatePasswordd($email_id,$password,$data)
	{
		$this->db->set('password',$password);
		$this->db->where('email',$email_id);
		$this->db->update('company_profile',$data);
	}
	
}

 ?>