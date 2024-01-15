
<?php
class browsecandidates extends CI_Controller{
   	public function index()
   	{
   		 $this->load->helper(array('form','url'));
   		$this->load->model("user/browsecandidate_model");
   		$result["data"]=$this->browsecandidate_model->select();
   		$this->load->view("user/browse-candidates.php",$result);
   	}
    public function paging()
    {
      extract($_GET);
       $page=$_GET['page'];

       if($page=="" || $page=="1")
       {
         echo $page;
        $page1=0;
        $result["data"]=$this->browsecandidate_model->paging($page1);
        $this->load->view("user/browse-candidates.php",$result);
       } 
       else
       {
        $page1=($page*3)-3;
         $result["data"]=$this->browsecandidate_model->paging($page1);
      $this->load->view("user/browse-candidates.php",$result);
       }
    }
      public function sersp()
      {
        extract($_POST);
         if ($_POST['specialization_id']) 
       {
           $specialization_id = $_POST['specialization_id'];
           $result['data']=$this->browsecandidate_model->searchsp($specialization_id);
           $this->load->view("user/browse-candidates.php",$result);
          // echo "success";
       }
      }
   	public function ser()
      {
         extract($_POST);
         if ($_POST['job_title_id']) 
       {
           $job_title_id = $_POST['job_title_id'];
           $result['data']=$this->browsecandidate_model->search($job_title_id);
           $this->load->view("user/browse-candidates.php",$result);
          // echo "success";
       }
      }
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/browsecandidate_model");
   	}
   }
   	?>