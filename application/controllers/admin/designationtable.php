<?php

   class designationtable extends CI_Controller{
   	 function __construct()  
      {  
         parent::__construct(); 
         $this->load->model("admin/designation_model"); 
      } 
   	public function index()
   	{
   		 $this->load->model('admin/designation_model');  
   		$result['data']=$this->designation_model->select();
   		
   		$this->load->view("admin/designation-table.php",$result);
   	}
    public function deleteDesi()
    {
    	extract($_POST);
          $designation_id=$id;
          $this->designation_model->deletedesi($designation_id);
          echo "success";
    }
    public function getDesi()
      {
         extract($_GET);
         $designation_id=$id;
         $designationresult=$this->designation_model->getdesi($designation_id);
         $data['desilist']=$designationresult;
         $this->load->view("admin/edit-designation",$data);
      }
      public function updateDesi()
      {
         extract($_POST);
         $designation_id=$designation_id;
         $date = date('Y-m-d H:i:s');
         $data['designation']=$designationn;
         $data['last_update']=$date;
         $this->designation_model->updatedesi($designation_id,$data);
         echo "success";
      }
   }

?>