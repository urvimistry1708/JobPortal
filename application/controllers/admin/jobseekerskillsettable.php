<?php

   class jobseekerskillsettable extends CI_Controller{
   	public function index()
   	{
   		$this->load->model("admin/jobseeker_skillset_model");
   		$result["data"]=$this->jobseeker_skillset_model->select();
   		$this->load->view("admin/jobseeker-skill-set-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/jobseeker_skillset_model");
        
   	}
        public function deleteSeekerSkill()
    {
            extract($_POST);
            $seeker_skillset_id=$id;
            $this->jobseeker_skillset_model->deleteseekerskill($seeker_skillset_id);
            echo "success";

    }

     public function getSeekerSkill()
    {
      extract($_GET);
      $seeker_skillset_id=$id;
       $jroleres=$this->jobseeker_skillset_model->getseekerskill($seeker_skillset_id);
        $userres=$this->jobseeker_skillset_model->users();
        $skillsetres=$this->jobseeker_skillset_model->skillset();
        
         $data=array('seeker_skill_list' => $jroleres , 'userList' => $userres,'skillsetList'=>$skillsetres);
       $this->load->view("admin/edit-seeker-skillset",$data);
    }

    public function updateSeekerSkill()
    {
      extract($_POST);
       $seeker_skillset_id=$seeker_skillset_id;
      $date=date('Y-m-d H:i:s');
      $data['user_id']=$username;
      $data['skill_id']=$skillname;
      $data['last_update']=$date;
      $this->jobseeker_skillset_model->updateseekerskill($seeker_skillset_id,$data);
      echo "success";

    }
   }

?>