

<?php
class Candidatechangepassword extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("user/Candidatechange-password.php");
   	}
   		public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/candidatechangepass_model");
   	}
   
   	public function updatePassword()
   	{
        extract($_POST);
        $old_pass=$old_pass;
        $new_pass=$new_pass;
        $email_id=$_SESSION['seeker_email_id'];
        $this->candidatechangepass_model->change($old_pass,$new_pass,$email_id);
        echo "success";
   	}
   }
   	?>