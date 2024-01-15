

<?php
class companyprofile extends CI_Controller{
   	public function index()
   	{ 
   		if(isset($_SESSION['employe_password']) && isset($_SESSION['employe_email_id']))
   		{
   		$password=$_SESSION['employe_password'];
   		$email_id=$_SESSION['employe_email_id'];
   		$result=$this->company_profile_model->select($email_id,$password);
   		 $res=$this->company_profile_model->getCountry();
        
         $data=array('companylist' => $result , 'countryList' => $res);
   		$this->load->view("user/company-profile.php",$data);
       $this->load->helper(array('form','url'));
   	}
   	   
   	}
   function __construct()
   	{
   		parent::__construct();
   		$this->load->model("user/company_profile_model");
   	}
   	 public function getState()
    {
       if($this->input->post('country_id'))
     {
      echo $this->company_profile_model->getState($this->input->post('country_id'));
     }
    }
    public function getCity()
    {
       if($this->input->post('state_id'))
     {
      echo $this->company_profile_model->getCity($this->input->post('state_id'));
     }
    }
    public function updateCompany()
      {
         
         $Filenamee='';
         $config=['upload_path' => './uploads/company_profile/',
        'allowed_types' => 'gif|jpg|png|jpeg'];
        $this->load->library('upload',$config);
      if($this->upload->do_upload("#company_image"))
      {
            
                $dataimg=array('upload_data'=>$this->upload->data());
                $Filenamee=$dataimg['upload_data']['file_name'];
              
     }
       
      if($Filenamee !="")
      {

        extract($_POST);
        $email_id=$_SESSION['employe_email_id'];
       // $company_profile_id=$company_profile_id;
         $date = date('Y-m-d H:i:s');
         $data['company_name']=$companyname;
         $data["profile_description"]=$profiledescription;
         $data['company_image']=$Filenamee;
         $data["establish_date"]=$establishdate;
         if($iso==null)
         {
            $data["ISO"]=0;
         }
         else
         {
            $data["ISO"]=$iso;
         }
        // $data["company_website"]=$company_website;
        // $data["email"]=$email;
        // $data["rating"]=$rating;
         $data["contact"]=$contact;
         $data['last_update']=$date;
         $data["city_id"]=$city_id;
         $data["state_id"]=$state_id;
         $data["country_id"]=$country_id;
         $data["street"]=$street;
         $this->company_profile_model->updatecompany($email_id,$data);
        echo "success";
       
      }
         
      }
   
   }
   	?>