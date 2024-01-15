<?php

   class userprofile extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/user-profile.php");
   		$this->load->helper(array('form','url'));
   	}
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/userprofle_model");
   	}
   	public function view()
   	{
   		$this->load->model("admin/userprofle_model");
        $result = $this->userprofle_model->jobrole();
        $result=$this->userprofle_model->designation();
   	}
   	public function Add()
   	{
   		          extract($_POST);
   		          $config=['upload_path' => './uploads/user_profile',
                 'allowed_types'       => 'gif|jpg|png|jpeg'
              
                  ];
                 $this->load->library('upload', $config);
                 if($this->upload->do_upload("profile_image"))
                 {
              
                     $dataimg=array('upload_data'=>$this->upload->data());
                     $fileName=$dataimg['upload_data']['file_name'];
                    // $this->load->view("admin/user-profile.php",$data);
                }

                if($fileName!="")
                {
                  extract($_POST);
                  $data["company_name"]=$companyname;
                  $data["joining_year"]=$joiningyear;
                  $data["resign_year"]=$resignyear;
                  $data["joining_month"]=$joiningmonth;
                  $data["resign_month"]=$resignmonth;
                  $data["profile_image"]=$fileName;
                  $data["job_role_id"]=$jobrole;
                  $data["designation"]=$designation;
                  $data["current_salary"]=$currentsal;
                  $data["experience"]=$experience;
                  $this->userprofle_model->insert($data);
                  $this->load->view("admin/user-profile.php",$data);
                }
                 
   	}
   	
   }
                

?>