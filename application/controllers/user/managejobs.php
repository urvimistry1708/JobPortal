
<?php
class managejobs extends CI_Controller{
   	public function index()
   	{
   
       
        if(isset($_SESSION['employe_email_id']))
        {
         $email_id=$_SESSION['employe_email_id'];
         //echo $email_id;
         $result["data"]=$this->managejob_model->selectjob($email_id);
        $this->load->view("user/manage-jobs.php",$result);
        }
   			
   		 
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/managejob_model");
   	}
     public function getJob()
      {
         extract($_GET);
         $job_id=$id;
         $result['data']=$this->managejob_model->getjob($job_id);
         $this->load->view("user/edit-managejob",$result);
        
      }
   	 public function deleteJob()
    {
            extract($_POST);
            $job_id=$id;
            $this->managejob_model->deletejob($job_id);
            echo "success";

    }
     public function updateJob()
    {
      extract($_POST);
       $job_id=$job_id;
      $date=date('Y-m-d H:i:s');
     $data['job_title_id']=$jobtitlee;
        $data['experience']=$experience;
        $data['require_skill_id']=$rskills;
       $data['min_qualification']=$quali;
       
        $data['salary_range']=$salary;
        $data['job_type']=$jtype;
       
        $data['job_location']=$location;
        
        $data['entry_date']=$entrydate;
        $data['job_close_date']=$closedate;
      $data['last_update']=$date;
      $this->managejob_model->updateJob($job_id,$data);
      echo "success";

    }
   }
   	?>