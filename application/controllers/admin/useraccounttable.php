<?php

   class useraccounttable extends CI_Controller{
   	public function index()
   	{
     
     // $this->load->view("admin/user-account.php",$data);
   		$this->load->model("admin/Useraccount_model");
   		$result["data"]=$this->Useraccount_model->select();
   		$this->load->view("admin/user-account-table.php",$result);

   }
   	function __construct()
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
      public function getUser()
      {
         extract($_GET);
         $user_id=$id;
         $userresult=$this->Useraccount_model->getuser($user_id);
         $res=$this->Useraccount_model->getCountry();
        
         $data=array('userlist' => $userresult , 'countryList' => $res);
         $this->load->view("admin/edit-user",$data);
        
      }
      public function updateUserAccount()
      {
         extract($_POST);
         $user_id=$user_id;
         $date = date('Y-m-d H:i:s');
          $data["user_name"]=$user_name;
                
                  $data["email_id"]=$email_id;
                  $data["contact"]=$contact;
                  $data["date_of_birth"]=$date_of_birth;

                  $data["role"]=$role;
                  $data["gender"]=$gender;
                 
                  $data["city_id"]=$city_id;
                  $data["state_id"]=$state_id;
                  $data["country_id"]=$country_id;
                  $data["street"]=$street;
                  $data["pincode"]=$pincode;
                  $data["registration_date"]=$registration_date;
         $data['last_update']=$date;
         $this->Useraccount_model->updateuser($user_id,$data);
         echo "success";
      }
      public function deleteUser()
       {
       
          extract($_POST);
          $user_id=$id;
          $this->Useraccount_model->deleteuser($user_id);
          echo "success";
       }
   }

?>