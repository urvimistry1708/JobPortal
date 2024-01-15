<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
   
   class resetpassword extends CI_Controller { 

   	  public function __construct(){
        parent::__construct();
           $this->load->Helper(array('form','url'));

    }

      public function index() { 

         $this->load->view("user/reset-password");
      }

      }

    ?>
