<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
   class jobtitletable extends CI_Controller { 

   	 public function __construct(){
        parent::__construct();

                $this->load->model('admin/jobtitle_model');
    } 
      public function index() { 

      	$this->load->model('admin/jobtitle_model');
        $result['data']=$this->jobtitle_model->select();
         $this->load->view("admin/jobtitle-table",$result);
      } 

       public function deleteJobtitle()
    {
            extract($_POST);
            $job_title_id=$id;
            $this->jobtitle_model->deletejobtitle($job_title_id);
            echo "success";

    }

     public function getJobtitle()
    {
      extract($_GET);
      $job_title_id=$id;
       $jobtres['jobtitle_list']=$this->jobtitle_model->getjobtitle($job_title_id);
       $this->load->view("admin/edit-jobtitle",$jobtres);
    }

    public function updateJobtitle()
    {
      extract($_POST);
       $job_title_id=$job_title_id;
      $date=date('Y-m-d H:i:s');
      $data['job_title']=$jobtitlee;
      $data['last_update']=$date;
      $this->jobtitle_model->updatejobtitle($job_title_id,$data);
      echo "success";

    }
   } 
?>