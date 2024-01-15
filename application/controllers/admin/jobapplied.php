<?php

   class jobapplied extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/job-applied.php");
   	}
   	public function __construct()
   	{
    	parent::__construct();
    	$this->load->model('admin/Jobapplied_model');
	}
	public function view()
    {
	    $this->load->model('admin/Jobapplied_model');
	    $result=$this->Jobapplied_model->getjob();
	    $result=$this->Jobapplied_model->getuser();
    }
    public function Add()
    {

      	 extract($_POST);

      	$data['job_id']=$jobtitle;
        $data['user_id']=$username;
        $data['status']=$status;
        $data['interview_schedule']=$interviewschedule;
        $data['entry_date']=$entrydate;
        $this->Jobapplied_model->insert($data);
        $this->load->view("admin/job-applied.php");
    }
   }

?>