
<?php
   class paymentGateway extends CI_Controller{
   	public function index()
   	{
   		$this->load->model("user/package_model");
   		
   	}
   		public function add()
   		{
if(isset($_SESSION['employe_email_id']))
   		{
   			extract($_POST);
   			$data['package_id']=$package_id;
            $data['company_profile_id']=$c_id
;   			$data['email']=$_SESSION['employe_email_id'];

            $this->package_model->add($data);

            $rs=$_SESSION['employe_email_id'];
            $result['dt']=$this->package_model->select($rs);
            
            foreach($result['dt'] as $row)
            {
            	
                 $_SESSION['booking_id']=$row['booking_id'];
               $_SESSION['package_price']=$row['package_price'];
               $_SESSION['company_name']=$row['company_name'];
               $_SESSION['email']=$row['email'];
               $_SESSION['create_date']=$row['create_date'];
               $_SESSION['street']=$row['street'];

             $_SESSION['contact']=$row['contact'];
           $_SESSION['package_type']=$row['package_type'];
             echo  $_SESSION['email'];
             echo  $_SESSION['contact'];
            
              
            }
      
           
   		}
   		}
    function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/package_model");
   		
   	
   	}
   }
   ?>