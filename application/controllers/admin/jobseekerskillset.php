<?php

   class jobseekerskillset extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/jobseeker-skill-set.php");
   	}
   	public function __construct(){
   		parent::__construct();
   		$this->load->model("admin/jobseeker_skillset_model");
   	}
   	public function Add(){
   		extract($_POST);
   		$data['skill_id']=$skillname;
         $data['user_id']=$username;
   	    $this->jobseeker_skillset_model->insert($data);
   		$this->load->view("admin/jobseeker-skill-set.php");
   	}

   }

?>