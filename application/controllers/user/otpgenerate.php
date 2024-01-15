<?php 
	
   class otpgenerate extends CI_Controller { 

   	  public function __construct(){
        parent::__construct();
           $this->load->Helper(array('form','url'));
 
    }

      public function index() { 
         $this->load->view("user/otp-generate");
      }
}
    ?>
