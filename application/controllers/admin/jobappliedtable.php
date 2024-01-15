<?php

   class jobappliedtable extends CI_Controller{
   
   		public function index()
   	{
   		$this->load->model("admin/Jobapplied_model");
   		$result["data"]=$this->Jobapplied_model->select();
   		$this->load->view("admin/job-applied-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/Jobapplied_model");
   	}
      public function getJobApplied()
      {
         extract($_GET);
         $job_applied_id=$id;
         $educationresult=$this->Jobapplied_model->getjobapplied($job_applied_id);
         $data['jobappliedlist']=$educationresult;
         $this->load->view("admin/edit-jobapplied-details",$data);
      }
      public function updateJobApplied()
      {
         extract($_POST);
         $job_applied_id=$job_applied_id;
         $date = date('Y-m-d H:i:s');
        $data['job_id']=$jobtitle;
        $data['user_id']=$username;
        $data['status']=$status;
        $data['interview_schedule']=$interviewschedule;
        $data['entry_date']=$entrydate;
         $data['last_update']=$date;
         $this->Jobapplied_model->updatejobapplied($job_applied_id,$data);
         echo "success";
      }
      public function deleteJobApplied()
       {
       
          extract($_POST);
          $job_applied_id=$id;
          $this->Jobapplied_model->deletejobapplied($job_applied_id);
          echo "success";
       }
   }
   

?>