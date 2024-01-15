<?php

   class experiencedetails extends CI_Controller{
     public function __construct()
    {
      parent::__construct();
      $this->load->model("admin/experience_model");
    }
     
   	public function index()
   	{
      $result=$this->experience_model->getCountry();
      $data['countryList']=$result;
    
      $this->load->view("admin/experience-details",$data); 
   		
   	}
    public function getState()
    {
       if($this->input->post('country_id'))
     {
      echo $this->experience_model->getState($this->input->post('country_id'));
     }
    }
    public function getCity()
    {
       if($this->input->post('state_id'))
     {
      echo $this->experience_model->getCity($this->input->post('state_id'));
     }
    }
   	public function Add()
   	{

   		extract($_POST);
   		if($iscurrentjob=="")
   		{
   			$data["is_current_job"]=0;
   		}
   		else
   		{
   			$data["is_current_job"]=$iscurrentjob;
   		}
   		
     
   		$data["company_name"]=$companyname;
   		$data["job_city_id"]=$city_id;
   		$data["job_state_id"]=$state_id;
   		$data["job_country_id"]=$country_id;
   		$data["job_title_id"]=$jobtitlee;
   		$data["start_date"]=$jdate;
   		$data["end_date"]=$rdate;
   		$data["description"]=$descriptionn;
      

   		$this->experience_model->insert($data);
   		 $this->load->view("admin/experience-details"); 
   	}
   }
?>