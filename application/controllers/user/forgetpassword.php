<?php

   class forgetpassword extends CI_Controller{

   	 public function __construct(){
        parent::__construct();
           $this->load->Helper(array('form','url'));
               // $this->load->model('user/login_model');
    }
   	public function index()
   	{
      // extract($_POST);
      // $jname=$name;
      // if($jname=="jobseeker")
      // {
      //   $_SESSION['jname']="jobseeker";
      //   $jname=$_SESSION['jname'];
        $this->load->view("user/forget-password.php");
      
   		
   	}
   }

?>