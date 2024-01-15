<?php

   class servicestable extends CI_Controller{
   	 function __construct()  
      {  
         parent::__construct(); 
         $this->load->model("admin/service_model"); 
      } 
   	public function index()
   	{
   		 $this->load->model('admin/service_model');  
   		$result['data']=$this->service_model->select();
   		
   		$this->load->view("admin/services-table.php",$result);
   	}
    public function deleteservice()
    {
    	extract($_POST);
          $service_id=$id;
          $this->service_model->deleteservice($service_id);
          echo "success";
    }
    public function getservice()
      {
         extract($_GET);
         $service_id=$id;
         $serviceresult=$this->service_model->getservice($service_id);
         $data['servicelist']=$serviceresult;
         $this->load->view("admin/edit-services",$data);
      }
      public function updateService()
      {
         extract($_POST);
         $service_id=$service_id;
         $date = date('Y-m-d H:i:s');
         $data['service_name']=$servicename;
         $data['last_update']=$date;
         $this->service_model->updateservice($service_id,$data);
         echo "success";
      }
   }

?>