<?php

   class job extends CI_Controller{
    public function index()
    {
       
      
       $this->load->view("admin/job.php");
    }
    public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/job_model");
   	}
   	public function view()
   	{
   		  $this->load->model("admin/job_model");
        $result = $this->job_model->job_title();
        $result=$this->job_model->getrskill();
   	}
     public function Add(){

         extract($_POST);

        $data['job_title_id']=$jobtitle;
        $data['description']=$description;
        $data['experience']=$experience;
        $data['require_skill_id']=$rskill;
       $data['min_qualification']=$min_qualification;
        $data['max_age']=$minimumage;
        $data['salary_range']=$salaryrange;
        $data['job_type']=$jobtype;
        $data['company_profile_id']=$company_name;
       // $data['interview_type']=$sid;
        $data['job_location']=$joblocation;
        $data['working_hours']=$workinghour;
        $data['last_apply_date']=$lastapplydate;
        $data['entry_date']=$entrydate;
        $data['job_close_date']=$jobcloseddate;
        $this->job_model->insert($data);
         $this->load->view("admin/job");
      }
   }

?>