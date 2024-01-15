<?php

   class skillset extends CI_Controller{
   	public function __construct(){
   		parent::__construct();
   		$this->load->model("admin/Skillset_model");
   	}
   	public function index()
   	{
   		$this->load->view("admin/skill-set.php");
   	}
   	public function Add(){
   		extract($_POST);
   		$data['skill_name']=$skillname;
   	    $this->Skillset_model->insert($data);
   		$this->load->view("admin/skill-set");
   	}
   }

?>