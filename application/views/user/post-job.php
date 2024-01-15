<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/post-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
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
      
   </head>
   <body>
       
       
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
                        <h3>Post A job</h3>
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
                           <li><a href="#">Employeer</a></li>
                           <li class="active-breadcromb"><a href="#">Post A job</a></li>
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
                           <i class="fa fa-tachometer"></i>
                           Employer
                           </a>
                        </li>
                        <li><a href="candidateprofile"><i class="fa fa-users"></i>Company Profile</a></li>
                       <!--  <li><a href="message.h"><i class="fa fa-envelope-open"></i>messages</a></li> -->
                        <li><a href="managejobs"><i class="fa fa-briefcase"></i>manage jobs</a></li>
                        <!-- <li class="active"><a href="candidate-earnings.html"><i class="fa fa-rocket"></i>earnings</a></li> -->
                        <li><a href="changepassword"><i class="fa fa-lock"></i>change password</a></li>
                        <li><a href="home"><i class="fa fa-power-off"></i>LogOut</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 col-lg-9">
                  <div class="dashboard-right">
                     <div class="earnings-page-box manage-jobs">
                        <div class="manage-jobs-heading">
                           <h3>Post A new job</h3>
                        </div>
                        <div class="new-job-submission">
                           <form>
                              <div class="resume-box">
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_title">Job Title:</label>
                                       <select id="j_titlee" name="j_titlee">
                                          <option value=''>Select Title</option>

                                 <?php foreach($this->browsejob_model->selectjob() as $tagData): ?>
                                <option value="<?php echo $tagData->job_title_id; ?>"><?php echo $tagData->job_title; ?></option><?php endforeach; ?>
                                         
                                       </select>
                                       <span id="err_jt" class="text-danger"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="companyname">Company:</label>
                                       <input type="text" id="companyname" placeholder="e.g. Dominant infotecch" >
                                       <span id="err_cname" class="text-danger"></span>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="location">Job Location:</label>
                                      <input type="text"  placeholder="e.g. Dominant infotecch" id="location" name="location">
                                      <span id="err_loc" class="text-danger"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="j_type">Job Type:</label>
                                       <select id="j_type">
                                          <option value=''>Select Region</option>
                                          <option value="1">Full TIme</option>
                                          <option value="2">Freelance</option>
                                          <option value="3">Part Time</option>
                                          <option value="4">Internship</option>
                                          <option value="5">Temporary</option>
                                       </select>
                                       <span id="err_jtype" class="text-danger"></span>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="experience">Experience:</label>
                                       <input type="text"  placeholder="e.g. 2 years" id="experience" name="experience">
                                       <span id="err_exp" class="text-danger"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="qualification">Minimum Qualification: </label>
                                       <input type="text" placeholder="e.g. Bsc,Bba" id="qualification" name="qualification">
                                       <span id="err_mc" class="text-danger"></span>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="mn_salary">Minimum Salary ($):</label>
                                       <input type="text" placeholder="e.g. 20000" id="mn_salary">
                                       <span id="err_ms" class="text-danger"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="mn_age">Maximum Age:</label>
                                       <input type="text" placeholder="e.g. above 20" id="mn_age">
                                       <span id="err_mage" class="text-danger"></span>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="r_skill">Require Skills ($):</label>
                                       <input type="text" placeholder="e.g. C,C++" id="r_skill">
                                       <span id="err_rs" class="text-danger"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="w_hour">Working Hour:</label>
                                       <input type="text" placeholder="e.g. 6 hours" id="w_hour">
                                       <span id="err_wh" class="text-danger"></span>
                                    </div>
                                 </div>
                                  <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="l_date">Last applyDate:</label>
                                       <input type="date"  id="l_date">
                                       <span id="err_lap" class="text-danger"></span>
                                    </div>
                                    <!-- <div class="single-input">
                                       <label for="w_hour">Working Hour:</label>
                                       <input type="text" placeholder="e.g. 6 hours" id="w_hour">
                                    </div> -->
                                 </div>
                                 <div class="single-resume-feild">
                                    <div class="single-input">
                                       <label for="j_desc">Job Description:<span>(optional)</span></label>
                                       <textarea id="j_desc"></textarea>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild upload_file">
                                    <div class="product-upload">
                                       <p>
                                          <i class="fa fa-upload"></i>
                                          Upload Files
                                       </p>
                                       <input type="file" id="w_screen">
                                    </div>
                                    <p>Images or documents that might be helpful in describing your job</p>
                                 </div>
                              </div>
                              <div class="single-input submit-resume">
                                 <button type="button" onclick="adddata()">Post Job</button>
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
       
       
       <?php  $this->load->view('user/templates/useraccount-footer');?>
        <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/jobpost.js?<?php echo rand(0,9999);?>"></script>
   
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/post-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
</html>

