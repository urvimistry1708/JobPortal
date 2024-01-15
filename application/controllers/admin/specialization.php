<?php

   class specialization extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/specialization.php");
   		
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/specialization_model");
   	}
   	
   	public function Add()
   	{
   		  extract($_POST);
   		  $data["specialization"]=$specializationn;
        $this->specialization_model->insert($data);
        $this->load->view("admin/specialization.php");        
   	}
   	
   }

?>