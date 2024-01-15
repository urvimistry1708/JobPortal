<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/manage-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:59 GMT -->
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
                        <h3>Employer</h3>
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
                           <li class="active-breadcromb"><a href="#">Manage Jobs</a></li>
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
                        
                        <li><a href="managejobs"><i class="fa fa-rocket"></i>manage jobs</a></li>
                        <li><a href="changepassword"><i class="fa fa-lock"></i>change password</a></li>
                        
                     </ul>
                  </div>
               </div>
               <div class="col-lg-9 col-md-12">
                  <div class="dashboard-right">
                     <div class="manage-jobs">
                        <div class="manage-jobs-heading">
                           <h3>My Job Listing</h3>
                        </div>
                        <div class="single-manage-jobs table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Title</th>
                                    <th>Experience</th>
                                    <th>Skills</th>
                                    <th>Qualification</th>
                                    <th>Salary</th>
                                    <th>Job Type</th>
                                    <th>Location</th>
                                    <th>Posted on </th>
                                    <th>Expiring on </th>
                                    <th>action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 foreach($data as $row)
                                  {
                                 ?>
                                 <tr>
                                    <td><?php echo $row['job_title'] ;?></td>
                                    <td><?php echo $row['experience'];?></td>
                                    <td ><?php echo $row['require_skill'];?></td>
                                    <td ><?php echo $row['min_qualification'];?></td>
                                    <td ><?php echo $row['salary_range'];?></td>
                                    <td ><?php echo $row['job_type'];?></td>
                                    <td ><?php echo $row['job_location'];?></td>
                                    <td ><?php echo $row['entry_date'];?></td>
                                    <td ><?php echo $row['last_apply_date'];?></td>
                                    <!-- <td><span class="pending">Pending Approval</span></td> -->
                                    <td><a href="<?php echo base_url();?>user/managejobs/getJob?id=<?php echo $row['job_id']?>"><i class="fas fa-pencil-alt"></i></a>&nbsp&nbsp&nbsp
                                                       <a> 
                                                     <i class="fas fa-minus-circle" onclick="deletedata('<?php echo $row['job_id']; ?>')"></i></a></td>
                                 </tr>
                                 <?php
                              }
                              ?> 
                              </tbody>
                           </table>
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
       <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/managejob.js?<?php echo rand(0,9999);?>"></script>
      <!-- Footer Area End -->
       
       
      
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/manage-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:59 GMT -->
</html>

