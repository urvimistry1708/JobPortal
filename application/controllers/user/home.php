<?php

   class home extends CI_Controller{
   	public function index()
   	{
   		 extract($_GET);

         if(isset($_GET['name'])=='logout')
         {
            session_unset();
            session_destroy();
         }
   		$this->load->helper(array('form','url'));
   		$this->load->model("user/home_model");
         $this->load->model("user/package_model");
         $this->load->model("user/browsecompany_model");

        
        if(isset($_SESSION['employe_email_id']))
        {
          $id=$_SESSION['employe_email_id'];
          $arr['company']=$this->browsecompany_model->selectcompanyy($id);
       
         
        }
            $arr['package']=$this->package_model->getPackage();
  
         $this->load->view("user/home.php",$arr);  
         
   	}
   	public function searchh()
      {
         extract($_POST);
         $title=$_POST['title'];
         $address=$_POST['address'];
        
         $result['data']=$this->home_model->search_job($title,$address);
        $this->load->view("user/home",$result);
      }
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/browsejob_model");
   		$this->load->model("user/browsecompany_model");
   		$this->load->model("user/browsejob_model");
         $this->load->model("user/package_model");
   	}
   	
   }

?>