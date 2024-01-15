<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
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
                        <h3>Employer Dashboard</h3>
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
                           <li><a href="#">employer</a></li>
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
               <div class="col-md-12 col-lg-3 dashboard-left-border">
                  <div class="dashboard-left">
                     <ul class="dashboard-menu">
                        <li class="active">
                           <a href="employerdashboard">
                           <i class="fa fa-tachometer"></i>
                          Employer
                           </a>
                        </li>
                        <li><a href="companyprofile"><i class="fa fa-users"></i>Company Profile</a></li>
                        
                        
                        <li><a href="managecandidates"><i class="fa fa-briefcase"></i>manage candidates</a></li>
                        <!-- <li><a href="transaction.html"><i class="fa fa-rocket"></i>transaction</a></li> -->
                         <li><a href="managejobs"><i class="fa fa-briefcase"></i>manage jobs</a></li>
                        <li><a href="changepassword"><i class="fa fa-lock"></i>change password</a></li>
                       
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 col-lg-9">
                  <div class="dashboard-right">
                     <div class="welcome-dashboard">
                        <h3>Welcome <span><?php echo $_SESSION['employe_email_id']; ?>!</span></h3>
                     </div>
                     <div class="row">
                        
                        <div class="col-lg-4 col-md-12">
                           <div class="widget_card_page grid_flex widget_bg_dark_red">
                              <div class="widget-icon">
                                 <i class="fa fa-users"></i>
                              </div>
                              <div class="widget-page-text">
                                
            <h3><?php echo $h; ?></h3>

                                 <h2>Company's</h2>
                              </div>
                           </div>
                        </div>
                     
                     <div class="col-lg-4 col-md-12">
                           <div class="widget_card_page grid_flex widget_bg_blue">
                              <div class="widget-icon">
                                 <i class="fa fa-gavel"></i>
                              </div>
                              <div class="widget-page-text">
                                 <h4>1426</h4>
                                 <h2>new Bids</h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                           <div class="widget_card_page grid_flex  widget_bg_purple">
                              <div class="widget-icon">
                                 <i class="fa fa-usd"></i>
                              </div>
                              <div class="widget-page-text">
                                 <h4>$12,000</h4>
                                 <h2> Payment</h2>
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
   
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
</html>

