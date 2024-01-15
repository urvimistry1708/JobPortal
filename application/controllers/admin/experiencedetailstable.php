<?php

   class experiencedetailstable extends CI_Controller{
   	
   	public function index()
   	{
   		$this->load->model("admin/experience_model");
   		$result["data"]=$this->experience_model->select();
   		$this->load->view("admin/experience-details-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/experience_model");
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
      public function getExperience()
      {
         extract($_GET);
         $experience_id=$id;
         $expresult=$this->experience_model->getexperience($experience_id);
         $res=$this->experience_model->getCountry();
        
         $data=array('expList' => $expresult , 'countryList' => $res);
         $this->load->view("admin/edit-experiencedetalis",$data);
        
      }
      public function updateExperience()
      {
         extract($_POST);
         $experience_id=$experience_id;
         $date = date('Y-m-d H:i:s');
         $data["company_name"]=$companyname;
         $data["job_city_id"]=$city_id;
         $data["job_state_id"]=$state_id;
         $data["job_country_id"]=$country_id;
         $data["job_title_id"]=$jobtitlee;
         $data["start_date"]=$jdate;
         $data["end_date"]=$rdate;
         $data["description"]=$descriptionn; 
         $data['last_update']=$date;
         $this->experience_model->updateexperience($experience_id,$data);
         echo "success";
      }
      public function deleteExperience()
       {
       
          extract($_POST);
          $experience_id=$id;
          $this->experience_model->deleteexperience($experience_id);
          echo "success";
       }
   }

?>