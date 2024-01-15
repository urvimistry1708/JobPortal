<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
   class jobroletable extends CI_Controller { 

   	 public function __construct(){
        parent::__construct();

                $this->load->model('admin/jobrole_model');
    } 
      public function index() { 

      	$this->load->model('admin/jobrole_model');
        $result['data']=$this->jobrole_model->select();
         $this->load->view("admin/jobrole-table",$result);
      } 

       public function deleteJobrole()
    {
            extract($_POST);
            $job_role_id=$id;
            $this->jobrole_model->deletejobrole($job_role_id);
            echo "success";

    }

     public function getJobrole()
    {
      extract($_GET);
      $job_role_id=$id;
       $jroleres['jrole_list']=$this->jobrole_model->getjobrole($job_role_id);
       $this->load->view("admin/edit-jobrole",$jroleres);
    }

    public function updateJobrole()
    {
      extract($_POST);
       $job_role_id=$job_role_id;
      $date=date('Y-m-d H:i:s');
      $data['job_role_title']=$jobrolee;
      $data['last_update']=$date;
      $this->jobrole_model->updatejobrole($job_role_id,$data);
      echo "success";

    }
   } 
?>