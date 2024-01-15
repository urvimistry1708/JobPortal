

<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();  ?>user_assets/img/favicon/favicon-32x32.png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/animate.min.css">
      <!--Select2 css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/select2.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/slicknav.min.css">
      <!--Bootstrap-Datepicker css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/bootstrap-datepicker.min.css">
      <!--Jquery UI css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/jquery-ui.min.css">
      <!--Perfect-Scrollbar css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/perfect-scrollbar.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/responsive.css">
      <link rel="alternate" type="application/rss+xml" title="Jobs" href="../rss/index.html">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     
      
      

      <title>Registration | SmartJobBoard</title>

      <link href="<?php echo base_url(); ?>user_assets/css/styles.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>user_assets/css/styles395b.css?v=1556079925.6872" rel="stylesheet" id="styles">

      <!-- <link rel="icon" href="../templates/FlowDND/assets/images/favicon.ico" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 -->

       </head>
   <body>
       
       
      <!-- Header Area Start -->
      <header class="jobguru-header-area stick-top forsticky">
         <div class="menu-animation">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-2">
                     <div class="site-logo">
                        <a href="index-2.html">
                        <img src="<?php echo base_url();  ?>user_assets/img/logo.png" alt="jobguru" class="non-stick-logo" id="img1"/>
                        <img src="<?php echo base_url();  ?>user_assets/img/logo-2.png" alt="jobguru" class="stick-logo" id="img1"/>
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="jobguru-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                  </div>
                  <div class="col-lg-6">
                     <div class="header-menu">
                        <nav id="navigation">
                           <ul id="jobguru_navigation">
                              <li >
                                 <a href="home">home</a>
                                
                              </li>
                              <li >
                                 <a href="#">for candidates</a>
                                 <ul>
                                    <li >
                                       <a href="browsejob">browse jobs</a>
                                       
                                    </li>
                                    
                                    <li><a href="browsecompanies">browse companies</a></li>
                                    <?php
                                         if(isset($_SESSION['seeker_email_id']) && isset($_SESSION['seeker_password']))
                                         {
                                          ?>
                                            <li class="has-inner-child">
                                     <a href="<?php echo site_url("user/addresume"); ?>">Add Resume</a>
                                     </li>
                                         <li class="has-inner-child">
                                     <a href="<?php echo site_url("user/uploadresume"); ?>">View Resume</a>
                                     </li>
                                       <?php
                                    }

                                    ?>
                                   
                                    <?php
                                         if(isset($_SESSION['seeker_email_id']) && isset($_SESSION['seeker_password']))
                                         {
                                          ?>
                                            <li class="has-inner-child">
                                     <a href="<?php echo site_url("user/candidatedashboard"); ?>">candidate dashboard</a>
                                     </li>
                                       
                                       <?php
                                    }

                                    ?>
                                    
                                 </ul>
                              </li>
                              <li >
                                 <a href="#">for employers</a>
                                 <ul>
                                    <li><a href="browsecandidates">Browse Candidates</a></li>
                                    
                                    <li><a href="post_job">Post A job</a></li>
                                    <?php
                                         if(isset($_SESSION['employe_email_id']) && isset($_SESSION['employe_password']))
                                         {
                                          ?>
                                        <li class="has-inner-child">
                                       <a href="<?php echo site_url("user/employerdashboard"); ?>">employer dashboard</a> 
                                    </li>
                                       <?php
                                    }
                                    ?>
                                   
                                 </ul>
                              </li>
                              <li >
                                 <a href="#">pages</a>
                                 <ul>
                                    <li><a href="about.html">About us</a></li>
                                    <li class="has-inner-child">
                                      <a href="#">blog</a>
                                       <ul>
                                          <li><a href="blog.html">blog</a></li>
                                          <li><a href="single-blog.html">single blog</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="job-page.html">job page</a></li>
                                      <?php
                                         if((isset($_SESSION['seeker_email_id']) && isset($_SESSION['seeker_password'])) || (isset($_SESSION['employe_email_id']) && isset($_SESSION['employe_password'])))
                            {
                                     
                                     if(isset($_SESSION['seeker_email_id']) && isset($_SESSION['seeker_password']))
                                     {
                                        ?>

                                   <li><a href="chat?name=seeker">Chat Here</a></li>
                                    <?php
                                     }
                                  else if(isset($_SESSION['employe_email_id']) && isset($_SESSION['employe_password']))
                                 {
                                 ?>
                                  <li><a href="chat?name=employe">Chat Here</a></li>
                                       <?php
                                    }
                                    ?>
                              <?php
                           }
                                    
                                    
                                  else 
                                  {
                                    ?>
                                    <li><a href="loginUser">Login</a></li>
                                    <?php
                                  }
                                  ?>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="header-right-menu">
                        <ul>

                           <!-- <li><a href="post_job" class="post-jobs">Post jobs</a></li> -->
                         
                           <?php
                                         if((isset($_SESSION['seeker_email_id']) && isset($_SESSION['seeker_password'])) || (isset($_SESSION['employe_email_id']) && isset($_SESSION['employe_password'])))
                            {
                                         
                                     if(isset($_SESSION['seeker_email_id']) && isset($_SESSION['seeker_password']))
                                     {
                                        ?>

                                    <li><a href="#"><?php echo $_SESSION['seeker_email_id']; ?>
                                    </a></li>
                                     <li>
                                        <a href="home?name=logout">
                                            <i class="fas fa-unlock"></i> Log Out </a>
                                    </li>
                                    <?php
                                     }
                                  else if(isset($_SESSION['employe_email_id']) && isset($_SESSION['employe_password']))
                                 {
                                 ?>
                                  <li><a href="#"><?php echo $_SESSION['employe_email_id']; ?>
                                    </a></li>
                                     <li>
                                        <a href="home?name=logout">
                                           <i class="fas fa-unlock-alt"></i> Log Out </a>
                                    </li>
                                       
                                       <?php
                                    }
                                    ?>
                              <?php
                           }

                                    else
                                    {
                                       ?>
                                        <li><a href="loginUser"><i class="fa fa-lock"></i>login</a></li>
                                       <?php
                                    }
                                    

                                    ?>
                                      <li><a href="signup"><i class="fa fa-user"></i>sign up</a></li>
                          
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      