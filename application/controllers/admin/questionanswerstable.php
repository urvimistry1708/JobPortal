<?php

   class questionanswerstable extends CI_Controller{
   	public function index()
   	{
   		$this->load->model("admin/question_answers_model");
   		       $result["data"]=$this->question_answers_model->select();
   		$this->load->view("admin/question-answers-table.php",$result);
   	}
   	function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/question_answers_model");
   	}
       public function deleteans()
       {
       
          extract($_POST);
          $answer_id=$id;
          $this->question_answers_model->deleteans($answer_id);
          echo "success";
       }
         public function getanswer()
      {
         extract($_GET);
         $answer_id=$id;
         $answerresult=$this->question_answers_model->getanswer($answer_id);
         $data['answerlist']=$answerresult;
         $this->load->view("admin/edit-answers",$data);
      }
      public function updateAnswer()
      {
         extract($_POST);
         $answer_id=$answer_id;
         $date = date('Y-m-d H:i:s');
         $data['answer']=$answers;
         $data['question_id']=$questionss;
         $data['last_update']=$date;
         $this->question_answers_model->updateanswer($answer_id,$data);
         echo "success";
      }
   }

?>