<?php

   class questioncontroller extends CI_Controller{
   	public function index()
   	{
   		$this->load->view("admin/questions.php");
   	}
   	 public function __construct()
   	{
   		parent::__construct();
   		$this->load->model("admin/question_model");
   	}
   	 public function Add()
    {
        extract($_POST);
        $data["question_title"]=$questiontitlee;
        
        $this->question_model->insert($data);
        $this->load->view("admin/questions.php");        
    }
   }

?>