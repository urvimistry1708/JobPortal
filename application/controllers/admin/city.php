<?php

   class city extends CI_Controller{
    public function index()
    {
        $this->load->view("admin/city.php");
    }
    public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/city_model");
   	}
   	public function view()
   	{
   		$this->load->model("admin/city_model");
        $result = $this->city_model->state();
        $result=$this->city_model->select();
   	}
    public function Add()
    {
        extract($_POST);
        $data["city_name"]=$city_namee;
        $data["state_id"]=$statee;
        $this->city_model->insert($data);
        $this->load->view("admin/city.php");        
    }
   }

?>