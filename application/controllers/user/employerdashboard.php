
<?php
class employerdashboard extends CI_Controller{
   	public function index()
   	{
   		
   	     $data['h']= $this->companyprofile_model->countEployer(); 

   	   $this->load->view("user/employer-dashboard.php",$data);
   	}
   	 public function __construct(){
        parent::__construct();
          
                $this->load->model('user/companyprofile_model');
    }

   }
   	?>