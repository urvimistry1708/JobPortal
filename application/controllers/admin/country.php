<?php

   class country extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/country.php");
   		
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/country_model");
   	}
   	
   	public function Add()
   	{
   		  extract($_POST);
   		  $data["country_name"]=$country_namee;
        $this->country_model->insert($data);
        $this->load->view("admin/country.php");        
   	}
   	
   }

?>