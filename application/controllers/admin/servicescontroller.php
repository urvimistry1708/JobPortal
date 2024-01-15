<?php

   class servicescontroller extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/services.php");
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/service_model");
   	}
   	 public function Add()
    {
        extract($_POST);
        $data["service_name"]=$servicename;   
        $this->service_model->insert($data);
        $this->load->view("admin/services.php");        
    }
   }

?>