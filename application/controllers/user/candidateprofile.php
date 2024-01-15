
<?php
class candidateprofile extends CI_Controller{
   	public function index()
   	{
   		if(isset($_SESSION['seeker_password']) && isset($_SESSION['seeker_email_id']))
   		{
   		$password=$_SESSION['seeker_password'];
   		$email_id=$_SESSION['seeker_email_id'];
   		$result=$this->candidate_profile_model->select($email_id,$password);
   		 $res=$this->candidate_profile_model->getCountry();
        $rs=$this->candidate_profile_model->selectdesi();
         $data=array('candidatelist' => $result , 'countryList' => $res,'desiList'=>$rs);
   		$this->load->view("user/candidate-profile.php",$data);
       $this->load->helper(array('form','url'));
   	    }
   	}
   		function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/candidate_profile_model");
   	}
   	 public function getState()
    {
       if($this->input->post('country_id'))
     {
      echo $this->candidate_profile_model->getState($this->input->post('country_id'));
     }
    }
    public function getCity()
    {
       if($this->input->post('state_id'))
     {
      echo $this->candidate_profile_model->getCity($this->input->post('state_id'));
     }
    }
    public function updateCompany()
      {
         
         $config=['upload_path' => './uploads/company_profile/',
        'allowed_types' => 'gif|jpg|png|jpeg'];
        $this->load->library('upload',$config);
        $Filenamee="";
      if($this->upload->do_upload("#company_image"))
      {
            
                $dataimg=array('upload_data'=>$this->upload->data());
                $Filenamee=$dataimg['upload_data']['file_name'];
              
     }
       
      if($Filenamee !="")
      {

        extract($_POST);
        $email_id=$_SESSION['seeker_email_id'];
       // $company_profile_id=$company_profile_id;
         $date = date('Y-m-d H:i:s');
         $data['firstname']=$firstname;
         $description["description"]=$description;
         $image['user_image']=$Filenamee;
         $dob["dob"]=$dob;
         if($seeker==null)
         {
            $data["exp_fre"]=0;
         }
         else
         {
            $data["exp_fre"]=$seeker;
         }
         $city["city_id"]=$city_id;
          $state["state_id"]=$state_id;
           $country["country_id"]=$country_id;
            $street["street"]=$street;
       //  $data["email"]=$email;
         $desi['designation_id']=$desi;
         $data["mobileno"]=$mobileno;
         $data['last_update']=$date;
         $pincode['pincode']=$pincode;
         
         $this->candidate_profile_model->updatecompany($email_id,$data,$description,$image,$dob,$city,$state,$country,$street,$desi,$pincode);
        echo "success";
       
      }
         
      }
   
   	
   }
   	?>