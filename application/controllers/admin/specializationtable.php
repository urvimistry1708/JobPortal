<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
   class specializationtable extends CI_Controller { 

   	 public function __construct(){
        parent::__construct();

                $this->load->model('admin/specialization_model');
    } 
      public function index() { 

      	$this->load->model('admin/specialization_model');
        $result['data']=$this->specialization_model->select();
         $this->load->view("admin/specialization-table",$result);
      } 

       public function deleteSpecialization()
    {
            extract($_POST);
            $specialization_id=$id;
            $this->specialization_model->deletespecialization($specialization_id);
            echo "success";

    }

     public function getSpecialization()
    {
      extract($_GET);
      $specialization_id=$id;
       $jobtres['specialization_list']=$this->specialization_model->getspecialization($specialization_id);
       $this->load->view("admin/edit-specialization",$jobtres);
    }

    public function updateSpecialization()
    {
      extract($_POST);
       $specialization_id=$specialization_id;
      $date=date('Y-m-d H:i:s');
      $data['specialization']=$specializationn;
      $data['last_update']=$date;
      $this->specialization_model->updatespecialization($specialization_id,$data);
      echo "success";

    }
   } 
?>