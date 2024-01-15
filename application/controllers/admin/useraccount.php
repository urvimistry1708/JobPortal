<?php

   class useraccount extends CI_Controller{
   	public function index()
   	{
   		$result=$this->Useraccount_model->getCountry();
      $data['countryList']=$result;
    
     
   		$this->load->view("admin/user-account.php",$data);
   		$this->load->helper(array('form','url'));
   	}
   
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/Useraccount_model");
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
   		          extract($_POST);
   		          $config=['upload_path' => './uploads/user_account',
                 'allowed_types'       => 'gif|jpg|png|jpeg'
              
                  ];
                 $this->load->library('upload', $config);
                 if($this->upload->do_upload("user_image"))
                 {
              
                     $dataimage=array('upload_data'=>$this->upload->data());
                     $fileNamee=$dataimage['upload_data']['file_name'];
                    // $this->load->view("admin/user-profile.php",$data);
                }

                if($fileNamee!="")
                {
                  extract($_POST);
                  $data["user_name"]=$user_name;
                  $data["password"]=$password;
                  $data["email_id"]=$email_id;
                  $data["contact"]=$contact;
                  $data["date_of_birth"]=$date_of_birth;
                  $data["user_image"]=$fileNamee;
                  $data["role"]=$role;
                  $data["gender"]=$gender;
                  $data["sms_notification_active"]=$smsnotification;
                  $data["email_notification_active"]=$emailnotification;
                  $data["city_id"]=$city_id;
                  $data["state_id"]=$state_id;
                  $data["country_id"]=$country_id;
                  $data["street"]=$street;
                  $data["pincode"]=$pincode;
                  $data["registration_date"]=$registration_date;
                  $this->Useraccount_model->insert($data);
                  $this->load->view("admin/user-account.php",$data);
                }
                 
   	}
   }

?>