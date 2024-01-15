<?php
class resumePDF extends CI_Controller{
   	public function index()
   	{
   		if(isset($_SESSION['seeker_email_id']))
         {
            $this->load->model("user/upload_resume_model");
           $seeker_email_id=$_SESSION['user_id'];
           $user=$_SESSION['seeker_email_id'];
            $getUser=$this->upload_resume_model->getusername($user);
           $getEdu=$this->upload_resume_model->getedu($seeker_email_id);
           $getExp=$this->upload_resume_model->getexp($seeker_email_id);
           $getSkill=$this->upload_resume_model->getskill($seeker_email_id);
           $arr=array('getUser'=>$getUser,'getExp'=>$getExp,'getEdu'=>$getEdu,'getSkill'=>$getSkill);
   		$this->load->view("user/resume_PDF",$arr);
   	     }
   }
   function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/upload_resume_model");
   	}
}
?>