

<html>  
    <head>  
        <title>Chat Application using PHP Ajax Jquery</title>  
         <?php  $this->load->view('user/templates/useraccount-header');?> 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
 
        <div class="container">
   <br />
   
   <h3 align="center">Chat Application using PHP Ajax Jquery</a></h3><br />
   <br />
   
   <div class="table-responsive">
    <h4 align="center">Online User</h4>
    <p align="right">Hi - <?php echo $_SESSION['employe_email_id'] ;?> - <a href="home?name=logout">Logout</a></p>
    
   </div>
  </div>
  <?php  $this->load->view('user/templates/useraccount-footer');?>
    </body>  
</html>  

