<?php

   class employer extends CI_Controller{
   	public function index()
   	{
        $result=$this->companyprofile_model->getCountry();
      $data['countryList']=$result;
   		$this->load->view("user/employer.php",$data);
   		 $this->load->helper(array('form','url'));
   	}
   		
   	function __construct(){
   	 	parent::__construct();
   	 	$this->load->model("user/companyprofile_model");
     
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
   	 public function Add()
      {

      	
        $config=['upload_path' => './uploads/company_profile/',
        'allowed_types' => 'gif|jpg|png|jpeg'];
        $this->load->library('upload',$config);
      if($this->upload->do_upload("company_image"))
      {
            
                $dataimg=array('upload_data'=>$this->upload->data());
                $FileName=$dataimg['upload_data']['file_name'];
              
     }
       
      if($FileName !="")
      {

        extract($_POST);
         $data['company_name']=$companyname;
         $data["profile_description"]=$profiledescription;
         $data['company_image']=$FileName;
         //$data["address"]=$address;
         $data["email"]=$companyemail;
         $data["password"]=$password;
         $data["establish_date"]=$establishdate;
         if($iso=="")
         {
            $data["ISO"]=0;
         }
         else
         {
            $data["ISO"]=$iso;
         }
         $data["company_website"]=$website;
         $data["rating"]=$rating;
         $data["contact"]=$contact;
 $data["city_id"]=$city_id;
                  $data["state_id"]=$state_id;
                  $data["country_id"]=$country_id;
                  $data["street"]=$street;
          $dataa["username"]=$companyname;
         $dataa["email_id"]=$companyemail;
         $dataa["password"]=$password;

         $this->companyprofile_model->insert($data);
          $this->companyprofile_model->insertuser($dataa);
         $this->load->view("user/employer");
       
      }
       
       }
   }

?>