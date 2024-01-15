<?php

   class questionstable extends CI_Controller{
   	public function index()
   	{
   		$this->load->model("admin/question_model");
   		$result["data"]=$this->question_model->select();
   		$this->load->view("admin/questions-table.php",$result);
   	}
   	 function __construct()  
      {  
         parent::__construct(); 
         $this->load->model("admin/question_model"); 
      } 
       public function deleteque()
       {
       
          extract($_POST);
          $question_id=$id;
          $this->question_model->deleteque($question_id);
          echo "success";
       }
         public function getquestion()
      {
         extract($_GET);
         $question_id=$id;
         $questionresult=$this->question_model->getquestion($question_id);
         $data['questionlist']=$questionresult;
         $this->load->view("admin/edit-questions",$data);
      }
      public function updateQuestion()
      {
         extract($_POST);
         $question_id=$question_id;
         $date = date('Y-m-d H:i:s');
         $data['question_title']=$questiontitlee;
         $data['last_update']=$date;
         $this->question_model->updatequestion($question_id,$data);
         echo "success";
      }
   }

?>