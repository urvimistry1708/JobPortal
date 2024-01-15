<?php

   class educationdetailstable extends CI_Controller{
   	
   	public function index()
   	{
   		$this->load->model("admin/education_model");
   		$result["data"]=$this->education_model->select();
   		$this->load->view("admin/education-details-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/education_model");
   	}
      public function getEducationDetails()
      {
         extract($_GET);
         $education_id=$id;
         $educationresult=$this->education_model->geteducationdetails($education_id);
         $data['educationlist']=$educationresult;
         $this->load->view("admin/edit-education-details",$data);
      }
      public function updateEducationDetails()
      {
         extract($_POST);
         $education_id=$education_id;
         $date = date('Y-m-d H:i:s');
         $data["university_name"]=$university_namee;
        $data["per_cgpa"]=$per_cgpaa;
        $data["course_type"]=$course_typee;
        $data["specialization_id"]=$specialization;
        $data["degree_name"]=$degree_name;
        $data["starting_date"]=$starting_date;
        $data["completion_date"]=$completion_date;
         $data['last_update']=$date;
         $this->education_model->updateeducationdetails($education_id,$data);
         echo "success";
      }
      public function deleteEducationDetails()
       {
       
          extract($_POST);
          $education_id=$id;
          $this->education_model->deleteeducationdetails($education_id);
          echo "success";
       }
   }

?>