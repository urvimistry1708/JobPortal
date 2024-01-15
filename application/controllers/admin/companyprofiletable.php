<?php

   class companyprofiletable extends CI_Controller{
   	public function index()
   	{
   		$this->load->model("admin/companyprofile_model");
   		$result["data"]=$this->companyprofile_model->select();
   		$this->load->view("admin/company-profile-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/companyprofile_model");
   	}
     public function getState()
    {
       if($this->input->post('country_id'))
     {
      echo $this->companyprofile_model->getState($this->input->post('country_id'));
     }
    }
    public function getCity()
    {
       if($this->input->post('state_id'))
     {
      echo $this->companyprofile_model->getCity($this->input->post('state_id'));
     }
    }
       public function deleteCompany()
    {
          extract($_POST);
          $company_profile_id=$id;
          $this->companyprofile_model->deletecompany($company_profile_id);
          echo "success";
    }
    public function getCompany()
      {
         extract($_GET);
         $company_profile_id=$id;
         $companyresult=$this->companyprofile_model->getcompany($company_profile_id);
         $res=$this->companyprofile_model->getCountry();
        
         $data=array('companylist' => $companyresult , 'countryList' => $res);
        
         $this->load->view("admin/edit-company.php",$data);
      }
      public function updateCompany()
      {
         
         $config=['upload_path' => './uploads/company_profile/',
        'allowed_types' => 'gif|jpg|png|jpeg'];
        $this->load->library('upload',$config);
      if($this->upload->do_upload("company_image"))
      {
            
                $dataimg=array('upload_data'=>$this->upload->data());
                $FileNamee=$dataimg['upload_data']['file_name'];
              
     }
       
      if($FileNamee !="")
      {

        extract($_POST);
        $company_profile_id=$company_profile_id;
         $date = date('Y-m-d H:i:s');
         $data['company_name']=$companyname;
         $data["profile_description"]=$profiledescription;
         $data['company_image']=$FileNamee;
     
         $data["establish_date"]=$establishdate;
         if($iso==null)
         {
            $data["ISO"]=0;
         }
         else
         {
            $data["ISO"]=$iso;
         }
         $data["company_website"]=$company_website;
         $data["email"]=$email;
         $data["rating"]=$rating;
         $data["contact"]=$contact;
         $data['last_update']=$date;
         $data["city_id"]=$city_id;
         $data["state_id"]=$state_id;
         $data["country_id"]=$country_id;
         $data["street"]=$street;
         $this->companyprofile_model->updatecompany($company_profile_id,$data);
        echo "success";
       
      }
         
      }
   }

?>