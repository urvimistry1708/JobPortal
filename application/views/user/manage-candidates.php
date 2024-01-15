<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/manage-candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
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
                        <h3>Manage Candidates</h3>
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
                           <li class="active-breadcromb"><a href="#">Manage Candidates</a></li>
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
                        <li>
                           <a href="employerdashboard">
                         <i class="fa fa-tachometer"> </i>
                           Employer
                           </a>
                        </li>
                        <li><a href="companyprofile"><i class="fa fa-users"></i>Company Profile</a></li>
                       <!--  <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li> -->
                       
                        <li class="active"><a href="managecandidates"><i class="fa fa-briefcase"></i>manage candidates</a></li>
                        <!-- <li><a href="transaction.html"><i class="fa fa-rocket"></i>transaction</a></li> -->
                         <li><a href="managejobs"><i class="fa fa-briefcase"></i>manage jobs</a></li>
                        <li><a href="changepassword"><i class="fa fa-lock"></i>change password</a></li>
                        
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 col-lg-9">
                  <div class="dashboard-right">
                     <div class="manage-jobs manage-candidates">
                        <div class="manage-jobs-heading">
                           <h3>Manage Candidates</h3>
                        </div>
                     </div>
                     <div class="candidate-list-page">
                        <?php
                            foreach($data as $row) 
                            {
                            
                        ?>
                        <div class="single-candidate-list">
                           <div class="main-comment">
                              <div class="candidate-image">
                                 <img src="<?php echo base_url().'uploads/user_profile/'.$row['user_image'] ;?>" height="60px" width="80px">
                              </div>
                              <div class="candidate-text">
                                 <div class="candidate-info">
                                    <div class="candidate-title">
                                       <h3><a href="#"><?php echo $row['user_name'];  ?></a></h3>
                                      
                                    </div>
                                    <div class="candidate-text-inner">
                                    <p><?php echo $row['job_title'];  ?></p>
                                 </div>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p><?php echo $row['specialization'];  ?></p>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p><?php echo $row['description'];  ?></p>
                                 </div>
                                 
                                 <div class="candidate-text-bottom">
                                    <div class="candidate-text-box">
                                       <p class="open-icon"><i class="fa fa-thumbs-up"></i> <?php echo $row['exp_fre'];  ?></p>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> <?php echo $row['job_location'];  ?></p>
                                       <p class="varify"><i class="fa fa-check"></i> $50 <?php echo $row['current_salary'];  ?>/ hr</p>
                                    </div>
                                    <div class="candidate-action">
                                        <a href="" class="jobguru-btn-2">View Resume</a>
                                         <a href="#" class="jobguru-btn-danger">Download Resume</a>
                                       <a href="#" class="jobguru-btn-2">Approve</a>
                                       <!-- <a href="#" class="jobguru-btn-danger">Cancel</a> -->
                                    </div>
                                 </div>
                                 <div class="remove-icon">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php
                     }
                     ?>

                        <!-- End Single Candidate List -->
                        <div class="pagination-box-row">
                           <p>Page 1 of 6</p>
                           <ul class="pagination">
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li>...</li>
                              <li><a href="#">6</a></li>
                              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                           </ul>
                        </div>
                        <!-- End Pagination -->
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

<!-- Mirrored from themescare.com/demos/jobguru/manage-candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
</html>

