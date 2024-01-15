<?php

   class seekerprofiletable extends CI_Controller{
   	public function index()
   	{
   		$this->load->model("admin/seekerprofile_model");
   		$result["data"]=$this->seekerprofile_model->select();
   		$this->load->view("admin/seeker-profile-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/seekerprofile_model");
   	}
       public function deleteSeeker()
    {
          extract($_POST);
          $email=$id;
          $this->seekerprofile_model->deleteseekerr($email);
          echo "success";
    }
    public function getseeker()
      {
         extract($_GET);
         $email=$id;
         $seekerresult=$this->seekerprofile_model->getseeker($email);
         $data['seekerlist']=$seekerresult;
         $this->load->view("admin/edit-seeker.php",$data);
      }
      public function updateSeeker()
      {
         extract($_POST);
         $email=$email;
         $date = date('Y-m-d H:i:s');
         $data["firstname"]=$firstname;
         $data["middlename"]=$middlename;
         $data["lastname"]=$lastname;
        
         $data["mobileno"]=$mobile;
         $data["address"]=$address;
         $data["exp_fre"]=$expfre;
         $data['last_update']=$date;
         $this->seekerprofile_model->updateseeker($email,$data);
         echo "success";
      }
   
   }

?>