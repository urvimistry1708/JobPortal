<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:55 GMT -->
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="jobguru | Job Board HTML Templates from Themescare">
      <meta name="keyword" content="Job, freelancer, employee, marketplace">
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>jobguru</title>
      <!-- Favicon -->
      
   <!-- Header Area Start -->
      <?php  $this->load->view('user/templates/page-header');?>
      <!-- Header Area End -->
       
       
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Candidate Dashboard</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcromb-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box-pagin">
                        <ul>
                           <li><a href="#">home</a></li>
                           <li><a href="#">candidates</a></li>
                           <li class="active-breadcromb"><a href="#">Dashboard</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Candidate Dashboard Area Start -->
      <section class="candidate-dashboard-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-12 dashboard-left-border">
                  <div class="dashboard-left">
                     <ul class="dashboard-menu">
                        <li class="active">
                           <a href="candidatedashboard">
                           <i class="fa fa-tachometer"></i>
                          Candidate
                           </a>
                        </li>
                        <li><a href="candidateprofile"><i class="fa fa-users"></i>My Profile</a></li>
                       <!--  <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li> -->
                        <!-- <li><a href="managejobs"><i class="fa fa-briefcase"></i>manage jobs</a></li> -->
                       <!--  <li><a href="candidate-earnings.html"><i class="fa fa-rocket"></i>earnings</a></li> -->
                        <li><a href="Candidatechangepassword"><i class="fa fa-lock"></i>change password</a></li>
                       
                     </ul>
                  </div>
               </div>
               <div class="col-lg-9 col-md-12">
                  <div class="dashboard-right">
                     <div class="welcome-dashboard">
                        <h3>Welcome <?php echo $_SESSION['seeker_email_id']; ?>!</h3>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <div class="widget_card_page grid_flex widget_bg_blue">
                              <div class="widget-icon">
                                 <i class="fa fa-gavel"></i>
                              </div>
                              <div class="widget-page-text">
                                 <h4>1426</h4>
                                 <h2>new orders</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <div class="widget_card_page grid_flex  widget_bg_purple">
                              <div class="widget-icon">
                                 <i class="fa fa-usd"></i>
                              </div>
                              <div class="widget-page-text">
                                 <h4>$4,000</h4>
                                 <h2>Earnings</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <div class="widget_card_page grid_flex widget_bg_dark_red">
                              <div class="widget-icon">
                                 <i class="fa fa-users"></i>
                              </div>
                              <div class="widget-page-text">
                                 <h4>45</h4>
                                 <h2>Jobs Applied</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Candidate Dashboard Area End -->
       
       
      <!-- Footer Area Start -->
      <?php  $this->load->view('user/templates/useraccount-footer');?>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
      
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:55 GMT -->
</html>

