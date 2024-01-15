<?php

   class designation extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/designation.php");
   		
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/designation_model");
   	}
   	
   	public function Add()
   	{
   		  extract($_POST);
   		  $data["designation"]=$designationn;
        $this->designation_model->insert($data);
        $this->load->view("admin/designation.php");        
   	}
   	
   }

?>