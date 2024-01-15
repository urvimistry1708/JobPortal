<?php

   class countrytable extends CI_Controller{

   	  public function __construct(){
    	parent::__construct();

    	    	$this->load->model('admin/country_model');
	}
   	public function index()
   	{
   		$this->load->model('admin/country_model');
   		$result['data']=$this->country_model->select();
   		$this->load->view("admin/country-table.php",$result);
   	}

     public function deleteCountry()
    {
            extract($_POST);
            $country_id=$id;
            $this->country_model->deletecountry($country_id);
            echo "success";

    }

     public function getCountry()
    {
      extract($_GET);
      $country_id=$id;
       $countryres['country_list']=$this->country_model->getcountry($country_id);
       $this->load->view("admin/edit-country",$countryres);
    }

    public function updateCountry()
    {
      extract($_POST);
       $country_id=$country_id;
      $date=date('Y-m-d H:i:s');
      $data['country_name']=$country_namee;
      $data['last_update']=$date;
      $this->country_model->updatecountry($country_id,$data);
      echo "success";

    }
   	
   }

?>