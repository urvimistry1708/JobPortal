<?php

   class educationdetails extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/education-details.php");
   	}
   	 public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/education_model");
   	}
   	public function view()
   	{
   		$this->load->model("admin/education_model");
        $result = $this->education_model->specialization();  
   	}
      public function Add()
    {
        extract($_POST);
        $data["university_name"]=$university_namee;
        $data["per_cgpa"]=$per_cgpaa;
        $data["course_type"]=$course_typee;
        $data["specialization_id"]=$specialization;
        $data["degree_name"]=$degree_name;
        $data["starting_date"]=$starting_date;
        $data["completion_date"]=$completion_date;
        $this->education_model->insert($data);
        $this->load->view("admin/education-details.php");        
    }
   }

?>