<?php
   class hello extends CI_controller
   {
   	public function index()
   	{
   		echo "In index";
   	}
   	public function f1()
   	{
   		echo "hello c1!!!";
   		$data['name']="Urvi";
   		$this->load->helper("html");
   		$this->load->helper("url");
   		$this->load->view("view1.php",$data);
   	}
   }

?>