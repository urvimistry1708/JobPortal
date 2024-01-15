<?php

   class logincontroller extends CI_Controller{
   	public function index()
   	{
   		session_unset();
   		session_destroy();
   		$this->load->view("admin/login.php");
   	}
   		function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/login_model");
   	}
   	public function LoadSignIn()
   	{
   		extract($_POST);
   		$email_id=$email_id;
   		$password=$password;
   		$cnt=$this->login_model->loadsignin($email_id,$password);
   		if($cnt>=1)
   		{
   			
   			session_start();
   			$_SESSION['username']=$username;
   			$_SESSION['password']=$password;
            echo "success";

   		}
   		else
   		{
   			echo "failed";
   		}
   	}
   }

?>