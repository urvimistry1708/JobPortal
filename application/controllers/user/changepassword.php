
<?php
class changepassword extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("user/change-password.php");
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/changepass_model");
   	}
   
   	public function updatePassword()
   	{
        extract($_POST);
        $old_pass=$old_pass;
        $new_pass=$new_pass;
        $email_id=$_SESSION['employe_email_id'];
        $this->changepass_model->change($old_pass,$new_pass,$email_id);
        echo "success";
   	}
   }
   	?>