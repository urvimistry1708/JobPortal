<?php
class browsejob extends CI_Controller{
   	public function index()
   	{
         extract($_POST);
   		 $this->load->helper(array('form','url'));
          $this->load->model("user/browsejob_model");
           
        if(isset($_SESSION['seeker_email_id']))
        {
          $e_id=$_SESSION['seeker_email_id'];
          $arr['User']=$this->browsejob_model->selectUser($e_id);
        }
   		
   		$arr["data"]=$this->browsejob_model->select();
      $this->load->view("user/browse-job.php",$arr);
     


      if(isset($_SESSION['score']))
      {
        $this->load->view("user/browse-job.php"); 
      }
      else
      {
        $score="";
        extract($_GET);
  
          $score=$_GET['score'];
         $_SESSION['score']=$score;
         echo $_SESSION['score'];
          $this->load->view("user/browse-job.php");
        }
        
   		
   	}
    // public function score()
    // {
    //   //$score="";

      
    // }
    public function Add()
    {

      if(isset($_SESSION['score']))
      {
        extract($_POST);
      $data['job_id']=$job_list;
      $data['user_id']=$user_id;
      $data['test_score']=$_SESSION['score'];
      $this->browsejob_model->add($data);
      echo "seccess";
      }
      else
      {
        echo "you can not apply for this job";
      }
      
    }
   	public function ser()
      {
        
         extract($_POST);

         if ($_POST['job_title_id']) 
       {
           $job_title_id = $_POST['job_title_id'];
           $result['data']=$this->browsejob_model->search($job_title_id);
           $this->load->view("user/browse-job.php",$result);
          // echo "success";
       }
      }
      public function searchsalary()
      {
         extract($_POST);
         if ($_POST['amount']) 
       {
           $jobtype = $_POST['amount'];
           $result['data']=$this->browsejob_model->searchsalary($amount);
           $this->load->view("user/browse-job.php",$result);
          // echo "success";
       }
       else
       {
         echo "No Data Found";
       }
      }
      public function searchjobType()
      {
         extract($_POST);
         if ($_POST['checkboxData']) 
       {
           $jobtype = $_POST['checkboxData'];
           $result['data']=$this->browsejob_model->searchjobtype($checkboxData);
           $this->load->view("user/browse-job.php",$result);
          // echo "success";
       }
       else
       {
         echo "No Data Found";
       }
      }
      public function searchjob()
      {
         extract($_POST);
        
         if ($_POST['searchloc']) 
       {
           $searchloc = $_POST['searchloc'];
           $result['data']=$this->browsejob_model->searchjobb($searchloc);
           $this->load->view("user/browse-job.php",$result);
          // echo "success";
       }
            }
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/browsejob_model");
   	}
   }
   	?>