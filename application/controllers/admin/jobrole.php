<?php

   class jobrole extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/jobrole.php");
   		
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/jobrole_model");
   	}
   	
   	public function Add()
   	{
   		  extract($_POST);
   		  $data["job_role_title"]=$jobrolee;
        $this->jobrole_model->insert($data);
        $this->load->view("admin/jobrole.php");        
   	}
   	
   }

?>