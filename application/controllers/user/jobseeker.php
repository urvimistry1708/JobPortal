<?php

   class jobseeker extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("user/jobseeker.php");
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/jobseeker_model");
   	}
   
   	public function Add()
   	{
   		extract($_POST);
   		$data["firstname"]=$firstname;
   		$data["middlename"]=$middlename;
   		$data["lastname"]=$lastname;
   		$data["email"]=$email;
   		$data["password"]=$password;
   		$data["mobileno"]=$mobile;
   		$data["address"]=$address;
   		$data["exp_fre"]=$expfre;

         $dataa["username"]=$firstname;
         $dataa["email_id"]=$email;
         $dataa["password"]=$password;

         $dt["user_name"]=$firstname;
         $dt["email_id"]=$email;
         $dt["password"]=$password;
         $dt["contact"]=$mobile;
         $dt["street"]=$address;
         $dt["exp_fre"]=$expfre;

   		$this->jobseeker_model->insert($data);
         $this->jobseeker_model->insertuser($dataa);
         $this->jobseeker_model->insertUsers($dt);
   		$this->load->view("user/jobseeker.php");
   	}
   }

?>