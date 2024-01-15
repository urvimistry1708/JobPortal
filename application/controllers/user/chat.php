
<?php
class chat extends CI_Controller{
   	public function index()
   	{
   		extract($_GET);
   		if(isset($_GET['name'])=="joseeker")
   		{
   			if(isset($_SESSION['employe_email_id']))
   			{
   				$namee=$_SESSION['employe_email_id'];
   				$this->load->view("user/chat.php",$namee);
   			}
   		}
   		

if(!isset($_SESSION['employe_email_id']))
{
 header('location:loginUser.php');
}
   		//$this->load->view("user/chat.php");
   	}
   }
   	?>