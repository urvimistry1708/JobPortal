<?php

   class post_job extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("user/post-job.php");
   		 $this->load->model("user/browsejob_model");
           
   	}
   		function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/browsejob_model");
   		$this->load->model("admin/job_model");
   	}
   	public function Add()
   	{
   		 extract($_POST);

        $data['job_title_id']=$j_titlee;
        $data['description']=$j_desc;
        $data['experience']=$experience;
        $data['require_skill_id']=$r_skill;
       $data['min_qualification']=$qualification;
        $data['max_age']=$mn_age;
        $data['salary_range']=$mn_salary;
        $data['job_type']=$j_type;
        $data['company_profile_id']=$companyname;
       // $data['interview_type']=$sid;
        $data['job_location']=$location;
        $data['working_hours']=$w_hour;
        $data['last_apply_date']=$l_date;
       
        $this->job_model->insert($data);
         $this->load->view("user/post-job");
   	}
   }


?>