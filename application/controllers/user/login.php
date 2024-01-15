<?php

   class login extends CI_Controller{
       public function __construct(){
        parent::__construct();
           $this->load->Helper(array('form','url'));
                $this->load->model('user/login_model');
    }

      public function index() { 
            session_unset();
         session_destroy();
         $this->load->view("user/login");
      }

      public function loadsignin()
      {
         extract($_POST);
         if($name=='jobseeker')
         {
         $email_id=$email_id;
         $password=$password;
         $cnt=$this->login_model->loadsignin($email_id,$password);
         if($cnt>=1)
         {
            session_start();
            $_SESSION['seeker_email_id']=$email_id;
            $_SESSION['seeker_password']=$password;
           // $this->login_model->add($email_id);
            echo "success";
          }
          else
          {
            echo "failed";
          }
        }
        else if($name=='employer')
        {
          $email_id=$email_id;
         $password=$password;
        $cnt=$this->login_model->loadsigninemp($email_id,$password);
          
           // $this->login_model->add($user_id);
         if($cnt>=1)
         {
          
           echo "success";
            session_start();
           
            $_SESSION['employe_email_id']=$email_id;
            $_SESSION['employe_password']=$password;
            //$_SESSION['user_id']=$user_idd;
            //echo $_SESSION['user_id'];

          
          }
          else
          {
            echo "failed";
          }
       }
      }

      public function forgotPassword()
   {
    //$_SESSION['name']=$name;
      $this->load->view('user/forget-password');
   }
   public function otpGenerate()
   {
     $nme='';
     $email_id='';
     extract($_POST);  
     $nme=$nme;
     $email_id=$email_id;
      if($nme=='jobseeker')
      {
        $cnt=$this->login_model->emailCheck($email_id);
        echo $cnt;
        if($cnt>=1)
    {
       echo "success";
       session_start();
      $_SESSION['seeker_email_id']=$email_id;
      $this->login_model->send_mail($email_id);
     
    }
      }
     else if($nme=='employer')
     {
       $cnt=$this->login_model->emailCheckEmployee($email_id);
    if($cnt>=1)
    {
        session_start();
        echo "success";
        $_SESSION['employe_email_id']=$email_id;
      $this->login_model->send_mail($email_id);
      
    }
  }
   
     
   }
   public function otpSent()
   {
      $this->load->view('user/otp-generate');
   }

   public function resetPassword()
   {
      $this->load->view('user/reset-password');
   }
   public function updatePassword()
   {
      extract($_POST);
      $email_id=$_SESSION['email_id'];
      $password=$customer_password;
       $date = date('Y-m-d H:i:s');
       $data['last_update']=$date;
      $this->login_model->updatePassword($email_id,$password,$data);
      echo "success";

      $nme=$nme;
     
     $password=$customer_password;
     $date = date('Y-m-d H:i:s');
       $data['last_update']=$date;
      if($nme=='jobseeker')
      {
        $email_id=$_SESSION['seeker_email_id'];
        $this->login_model->updatePassword($email_id,$password,$data);
        $this->login_model->updatePassworduser($email_id,$password,$data);
      echo "success";
      }
     else if($nme=='employer')
     {
       $email_id=$_SESSION['employe_email_id'];
        $this->login_model->updatePasswordd($email_id,$password,$data);
      echo "success";
      
    }
  }
   }

   	
   

?>