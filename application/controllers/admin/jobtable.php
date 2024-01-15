<?php

   class jobtable extends CI_Controller{
   
   	public function index()
   	{
   		$this->load->model("admin/job_model");
   		$result["data"]=$this->job_model->select();
   		$this->load->view("admin/job-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/job_model");
   	}
       public function deleteJob()
    {
            extract($_POST);
            $job_id=$id;
            $this->job_model->deletejob($job_id);
            echo "success";

    }

     public function getJob()
    {
      extract($_GET);
      $job_id=$id;
       $jobres=$this->job_model->getjob($job_id);
       $jtitle=$this->job_model->job_title();
       $rskill=$this->job_model->getrskill();
       $company_name=$this->job_model->company();
       $data=array('job_list'=>$jobres,'job_title'=>$jtitle,'r_skill'=>$rskill,'company_name'=>$company_name);
       $this->load->view("admin/edit-job",$data);
    }

    public function updateJob()
    {
      extract($_POST);
       $job_id=$job_id;
      $date=date('Y-m-d H:i:s');
     $data['job_title_id']=$jobtitle;
        $data['description']=$description;
        $data['experience']=$experience;
        $data['require_skill_id']=$rskill;
       $data['min_qualification']=$min_qualification;
        $data['max_age']=$minimumage;
        $data['salary_range']=$salaryrange;
        $data['job_type']=$jobtype;
       $data['company_profile_id']=$company_name;
        $data['job_location']=$joblocation;
        $data['working_hours']=$workinghour;
        $data['last_apply_date']=$lastapplydate;
        $data['entry_date']=$entrydate;
        $data['job_close_date']=$jobcloseddate;
      $data['last_update']=$date;
      $this->job_model->updatejob($job_id,$data);
      echo "success";

    }
   }

?>