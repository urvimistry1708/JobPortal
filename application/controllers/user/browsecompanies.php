<?php
class browsecompanies extends CI_Controller{
   	public function index()
   	{
         extract($_GET);
   		 $this->load->helper(array('form','url'));
          $this->load->model("user/browsecompany_model");
          $char=isset($_GET['char'])?$_GET['char']:"";
          $arr= preg_replace('#[^a-z]#i', '', $char);
          $rearch=$this->browsecompany_model->filtercompany($arr);
   		
   		//$result=$this->browsecompany_model->select();
         if($rearch >=1)
         {
         $res=array('searchResult'=>$rearch);
   		$this->load->view("user/browse-companies.php",$res);

         }
         else
         {
            echo 'No data Found';
         }
   	}

   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/browsecompany_model");
   	}
   }
   	?>