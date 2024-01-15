<?php

   class skillsettable extends CI_Controller{
       function __construct()  
      {  
         parent::__construct(); 
         $this->load->model("admin/Skillset_model"); 
      } 
   	public function index()
   	{
         $this->load->model('admin/Skillset_model');  
   		$result['data']=$this->Skillset_model->select();
   		$this->load->view("admin/skill-set-table.php",$result);
   	}
   	public function getskill()
      {
         extract($_GET);
         $skill_id=$id;
         $skillresult=$this->Skillset_model->getskill($skill_id);
         $data['skilllist']=$skillresult;
         $this->load->view("admin/edit-skill-set",$data);
      }
      public function updateSkill()
      {
         extract($_POST);
         $skill_id=$skill_id;
         $date = date('Y-m-d H:i:s');
         $data['skill_name']=$skillname;
         $data['last_update']=$date;
         $this->Skillset_model->updateskill($skill_id,$data);
         echo "success";
      }
      public function deleteskill()
       {
       
          extract($_POST);
          $skill_id=$id;
          $this->Skillset_model->deleteskill($skill_id);
          echo "success";
       }
   }

?>