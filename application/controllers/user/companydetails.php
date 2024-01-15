<?php
class companydetails extends CI_Controller{
   	public function index()
   	{
   		extract($_GET);

   		$company_profile_id=$_GET['company_profile_id'];
   		
   		$this->load->helper(array('form','url'));
   		$this->load->model("user/browsecompany_model");
   		$result=$this->browsecompany_model->disp($company_profile_id);
   		
        $companyy=$this->browsecompany_model->selectcompany($company_profile_id);
        
        
         $res=array('data' => $result , 'companyList' => $companyy);
   		
   		$this->load->view("user/company-details.php",$res);
   	}
   		function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/browsecompany_model");
   	}
   }
   	?>