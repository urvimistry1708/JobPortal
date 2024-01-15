<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:00 GMT -->
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
                        <h3>Change Password</h3>
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
                           <li class="active-breadcromb"><a href="#">Change Password</a></li>
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
                        <li>
                           <a href="employerdashboard">
                           <i class="fa fa-tachometer"></i>Employer
                           </a>
                        </li>
                        <li><a href="companyprofile"><i class="fa fa-users"></i>company Profile</a></li>
                        <!-- <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li> -->
                       
                        <li><a href="managecandidates"><i class="fa fa-briefcase"></i>manage candidates</a></li>
                        <!-- <li><a href="transaction.html"><i class="fa fa-rocket"></i>transaction</a></li> -->
                         <li><a href="managejobs"><i class="fa fa-briefcase"></i>manage jobs</a></li>
                        <li><a href="changepassword"><i class="fa fa-lock"></i>change password</a></li>
                       
                     </ul>
                  </div>
               </div>
               <div class="col-lg-9 col-md-12">
                  <div class="dashboard-right">
                     <div class="change-pass manage-jobs">
                        <div class="manage-jobs-heading">
                           <h3>Change Password</h3>
                        </div>
                        <form>
                           <p>
                              <label for="old_pass">Old Password</label>
                              <input type="password" id="old_pass">
                              <span id="errold" class="text-danger"></span>
                           </p>
                           <p>
                              <label for="new_pass">New Password</label>
                              <input type="password"  id="new_pass">
                               <span id="errnew" class="text-danger"></span>
                           </p>
                           <p>
                              <label for="confirm_pass">confirm Password</label>
                              <input type="password"  id="confirm_pass">
                               <span id="errconfirm" class="text-danger"></span>
                           </p>
                           <p>
                              <input type="button" onclick="changepass()" value="Update">
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Candidate Dashboard Area End -->
       
       
      <!-- Footer Area Start -->
      <?php  $this->load->view('user/templates/useraccount-footer');?>
      <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/change-password.js?<?php echo rand(0,9999);?>"></script>
      <!-- Footer Area End -->
       
       
     
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:00 GMT -->
</html>

