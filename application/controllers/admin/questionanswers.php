<?php

   class questionanswers extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/question-answers.php");
   	}
   	 public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/question_answers_model");
   	}
   	 public function Add()
    {
        extract($_POST);
        $data["question_id"]=$questions;
        $data["answer"]=$answerid;
        
        $this->question_answers_model->insert($data);
        $this->load->view("admin/question-answers.php");        
    }
   }

?>