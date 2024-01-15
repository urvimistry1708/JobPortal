<?php

   class seekerprofile extends CI_Controller{
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/seekerprofile_model");
   	}
   	public function index()
   	{
   		$this->load->view("admin/seeker-profile.php");
   	}
   	public function Add()
   	{
   		extract($_POST);
   		$data["firstname"]=$firstname;
   		$data["middlename"]=$middlename;
   		$data["lastname"]=$lastname;
   		$data["email"]=$email;
   		$data["mobileno"]=$mobile;
   		$data["address"]=$address;
   		$data["exp_fre"]=$expfre;
   		$this->seekerprofile_model->insert($data);
   		$this->load->view("admin/seeker-profile.php");
   	}
   }

?>