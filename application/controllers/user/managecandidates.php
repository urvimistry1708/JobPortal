

<?php
class managecandidates extends CI_Controller{
   	public function index()
   	{
   		$this->load->helper(array('form','url'));
   		$this->load->model("user/managecandidates_model");
   		if(isset($_SESSION['employe_email_id']))
   		{
   			$employe_email_id=$_SESSION['employe_email_id'];
   			$result["data"]=$this->managecandidates_model->select($employe_email_id);
   		$this->load->view("user/manage-candidates.php",$result);
   		}
   		
   	}
   		function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/managecandidates_model");
   	}
   }
   	?>