<?php

   class userprofiletable extends CI_Controller{
   	public function index()
   	{
   		$this->load->model("admin/userprofle_model");
   		$result["data"]=$this->userprofle_model->select();
   		$this->load->view("admin/user-profile-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/userprofle_model");
   	}
      public function view()

      {
         $data['JobroleList']=$this->userprofle_model->jobrole();
         $this->userprofle_model->designation();
          $this->load->view("admin/edit-user-profile",$data);
      }

         public function getUserProfile()
      {
         extract($_GET);
         $user_profile_id=$id;
         $userresult=$this->userprofle_model->getuserprofile($user_profile_id);
         $data['userlist']=$userresult;
         $this->load->view("admin/edit-user-profile",$data);
      }
      public function updateUserProfile()
      {
         extract($_POST);
         $user_profile_id=$user_profile_id;
         $date = date('Y-m-d H:i:s');
         $data["company_name"]=$companyname;
                  $data["joining_year"]=$joiningyear;
                  $data["resign_year"]=$resignyear;
                  $data["joining_month"]=$joiningmonth;
                  $data["resign_month"]=$resignmonth;
                 
                  $data["job_role_id"]=$jobrole;
                  $data["designation_id"]=$designation;
                  $data["current_salary"]=$currentsal;
                  $data["experience"]=$experience;
                  $data['last_update']=$date;
         $this->userprofle_model->updateuserprofile($user_profile_id,$data);
         echo "success";
      }
      public function deleteUserProfile()
       {
       
          extract($_POST);
          $user_profile_id=$id;
          $this->userprofle_model->deleteuserprofile($user_profile_id);
          echo "success";
       }
   }

?>