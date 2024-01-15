<?php

   class companyprofile extends CI_Controller{
   	public function index()
   	{
      $result=$this->companyprofile_model->getCountry();
      $data['countryList']=$result;
    
   		$this->load->view("admin/company-profile.php",$data);
   		 $this->load->helper(array('form','url'));
   	}
   	function __construct(){
   	 	parent::__construct();
   	 	$this->load->model("admin/companyprofile_model");
     
   	}
    public function getState()
    {
       if($this->input->post('country_id'))
     {
      echo $this->Useraccount_model->getState($this->input->post('country_id'));
     }
    }
    public function getCity()
    {
       if($this->input->post('state_id'))
     {
      echo $this->Useraccount_model->getCity($this->input->post('state_id'));
     }
    }
   	 public function Add()
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
         $data["email"]=$email;
         $data["company_website"]=$company_website;
         $data["rating"]=$rating;
         $data["contact"]=$contact;
         $data["city_id"]=$city_id;
                  $data["state_id"]=$state_id;
                  $data["country_id"]=$country_id;
                  $data["street"]=$street;
         $this->companyprofile_model->insert($data);
         $this->load->view("admin/company-profile",$data);
       
      }
       
       }
   }

?>