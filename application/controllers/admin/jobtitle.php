<?php

   class jobtitle extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/jobtitle.php");
   		
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/jobtitle_model");
   	}
   	
   	public function Add()
   	{
   		  extract($_POST);
   		  $data["job_title"]=$jobtitlee;
        $this->jobtitle_model->insert($data);
        $this->load->view("admin/jobtitle.php");        
   	}
   	
   }

?>