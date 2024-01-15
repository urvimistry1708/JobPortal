<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/company-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
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
                        <h3>Manage Jobs</h3>
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
                           <li class="active-breadcromb"><a href="#">Manage Jobs</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
        <?php
                             foreach($data as $row)
                             {
                           ?>
      <!-- Candidate Dashboard Area Start -->
      <section class="candidate-dashboard-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-3 dashboard-left-border">
                  <div class="dashboard-left">
                     <ul class="dashboard-menu">
                        <li>
                           <a href="employerdashboard">
                           <i class="fa fa-tachometer"></i>
                           Employer
                           </a>
                        </li>
                        <li class="active"><a href="companyprofile"><i class="fa fa-users"></i>Company Profile</a></li>
                        <!-- <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li>
                        <li><a href="post-job.html"><i class="fa fa-envelope-open"></i>post a job</a></li> -->
                        <li><a href="managecandidates"><i class="fa fa-briefcase"></i>manage candidates</a></li>
                       <!--  <li><a href="transaction.html"><i class="fa fa-rocket"></i>transaction</a></li> -->
                        <li><a href="managejobs"><i class="fa fa-briefcase"></i>manage jobs</a></li>
                        <li><a href="changepassword"><i class="fa fa-lock"></i>change password</a></li>
                       
                     </ul>
                  </div>
               </div>

               <div class="col-md-12 col-lg-9">
                  <div class="dashboard-right">
                     <div class="candidate-profile">
                       <!--  <div class="candidate-single-profile-info">
                           <div class="single-resume-feild resume-avatar">
                              <div class="resume-image company-resume-image">
                                 <img src="<?php echo base_url().'uploads/company_profile/'.$row['company_image'] ;?>" >
                                 <div class="resume-avatar-hover">
                                    <div class="resume-avatar-upload">
                                       <p>
                                          <i class="fa fa-pencil"></i>
                                          Edit
                                       </p>
                                       <input type="file" id="company_image" name="company_image">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <div class="candidate-single-profile-info">
                           
                           <form id="company_profile" name="company_profile" method="POST">
                              <div class="resume-box">
                                 <h3>Manage Jobs</h3>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="jobtitle">Job Title:</label>
                                       <input type="text" name="job_id" id="job_id" value="<?php echo $row['job_id']; ?>" hidden>
                                      <select class="form-control"   id="jobtitlee" name="jobtitlee">
                                
                                 <?php foreach($this->managejob_model->JobTitle() as $tagData): ?>
                                <option value="<?php echo $tagData->job_title_id; ?>" 
                                 <?php
                                 if($row['job_title_id']==$tagData->job_title_id)
                                 {
                                    echo "selected";
                                 }
                                 ?>><?php echo $tagData->job_title; ?></option><?php endforeach; ?>
                                
                              </select>
                                    </div>
                                    <div class="single-input">
                                       <label for="experience">Experience:</label>
                                       <input type="text" name="experience" id="experience" value="<?php echo $row['experience']; ?>">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="rskills">Require skills:</label>
                                        <select class="form-control"   id="rskills" name="rskills">
                                
                                 <?php foreach($this->managejob_model->skills() as $tagData): ?>
                                <option value="<?php echo $tagData->require_skill_id; ?>" 
                                 <?php
                                 if($row['require_skill_id']==$tagData->require_skill_id)
                                 {
                                    echo "selected";
                                 }
                                 ?>><?php echo $tagData->require_skill; ?></option><?php endforeach; ?>
                                
                              </select>
                                    </div>
                                    <div class="single-input">
                                       <label for="quali">Qualification:</label>
                                       <input type="text" name="quali" id="quali" value="<?php echo $row['min_qualification']; ?>">
                                    </div>
                                    </div>
                                    <div class="single-resume-feild feild-flex-2">
                                   
                                    <div class="single-input">
                                       <label for="salary">Salary:</label>
                                       <input type="text" name="salary" id="salary" value="<?php echo $row['salary_range']; ?>">
                                    </div>
                                     <div class="single-input">
                                       <label for="jtype">Job Type:</label>
                                        <select class="form-control"   id="jtype" name="jtype">
                                
                                
                                <option value="<?php echo $row['job_type']; ?>" ><?php echo $row['job_type']; ?></option> 
                                <option id="0"></option>
                                <option value="Full Time">Full Time</option>
                                 <option value="Part Time">Part Time</option>
                                  <option value="Temporary">Temporary</option>
                                   <option value="Internship">Internship</option>
                                    <option value="Freelancer">Freelancer</option>
                              </select>
                                    </div>
                                    </div>
                                    <div class="single-resume-feild feild-flex-2">
                                   
                                    <div class="single-input">
                                       <label for="location">Job Location:</label>
                                       <input type="text" name="location" id="location" value="<?php echo $row['job_location']; ?>">
                                    </div>
                                     <div class="single-input">
                                       <label for="entrydate">Job Posted on:</label>
                                         <input type="date" name="entrydate" id="entrydate" value="<?php echo $row['entry_date']; ?>">
                                    </div>
                                    <div class="single-input">
                                       <label for="closedate">Last Apply date:</label>
                                         <input type="date" name="closedate" id="closedate" value="<?php echo $row['last_apply_date']; ?>">
                                    </div>
                                    
                                    </div>
                                   
                                 
                              </div>
                            
                             
                              <div class="submit-resume">
                                  <input type="button" value="Update" name="update" class="btn blue" onclick="updatedata()"> 
                              </div>

                           </form>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Candidate Dashboard Area End -->
      <?php
                        }
                        ?>
       
       
      <!-- Footer Area Start -->
     <?php  $this->load->view('user/templates/useraccount-footer');?>
       <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/managejob.js?<?php echo rand(0,9999);?>"></script>
      <!-- Footer Area End -->
       
       
      
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/company-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
</html>

