<?php

   class state extends CI_Controller{
    public function index()
    {
        $this->load->view("admin/state.php");
    }
    public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/state_model");
   	}
   	public function view()
   	{
   		$this->load->model("admin/state_model");
        $result = $this->state_model->country();
        
   	}
    public function Add()
    {
        extract($_POST);
        $data["state_name"]=$state_namee;
        $data["country_id"]=$countryy;
        $this->state_model->insert($data);
        $this->load->view("admin/state.php");        
    }
   }

?>