
<?php
class addresume extends CI_Controller{
   	public function index()
   	{
   		 $this->load->helper(array('form','url'));
   		if(isset($_SESSION['seeker_email_id']))
   		{
   			$email=$_SESSION['seeker_email_id'];
   			$result=$this->addResume_model->getUser($email);
   			 $res=$this->addResume_model->getCountry();
   			 $arr=array('data'=>$result,'countryList'=>$res);
   			$this->load->view("user/add-resume.php",$arr);
   		}
   		
   	}
   	public function Add()
    {
    	extract($_POST);
    	//education
    	$data['degree_name']=$degree_name;
    	$data['university_name']=$university_name;
    	$data['per_cgpa']=$per_cgpa;
    	$data['course_type']=$course_type;
    	$data['specialization_id']=$specialization;
    	$data['starting_date']=$starting_date;
    	$data['completion_date']=$completion_date;
    	$data['description']=$desc;
    	$data['user_id']=$user_id;
        //experience
    	$dataa['start_date']=$start_date;
    	$dataa['end_date']=$end_date;
    	$dataa['job_title_id']=$jobtitle;
    	$dataa['designation_id']=$designation;
    	$dataa['current_salary']=$salary;
    	$dataa['company_name']=$companyname;
    	$dataa['job_location']=$job_location;
    	$dataa['description']=$desc1;
    	$dataa['user_id']=$user_id;
    	//Seekerskill
        $dt['skill_id']=$skill;
        $dt['user_id']=$user_id;
        $_SESSION['user_id']=$user_id;
        $this->addResume_model->insertEdu($data);
        $this->addResume_model->insertExp($dataa);
        $this->addResume_model->insertskill($dt);
        echo "success";
    }

   	 public function getState()
    {
       if($this->input->post('country_id'))
     {
      echo $this->addResume_model->getState($this->input->post('country_id'));
     }
    }
    public function getCity()
    {
       if($this->input->post('state_id'))
     {
      echo $this->addResume_model->getCity($this->input->post('state_id'));
     }
    }
    
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/addResume_model");
   	}
   }
   	?>