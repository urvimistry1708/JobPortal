<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/submit-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:55 GMT -->
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
      <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/base.css">
<link rel="stylesheet" href="<?php echo base_url();  ?>user_assets/css/stylee.css">

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
                        <h3>Submit resume</h3>
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
                           <li class="active-breadcromb"><a href="#">Submit resume</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Submit Resume Area Start -->
      <section class="jobguru-submit-resume-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="submit-resume-box">
                     <form>
                         <?php
                         foreach($data as $row)
                         { 
                         ?>
                        <div class="resume-box">
                           <div class="single-resume-feild resume-avatar">
                              <div class="resume-image">
                                <img src="<?php echo base_url().'uploads/user_profile/'.$row['user_image'] ;?>" >
                                 <div class="resume-avatar-hover">
                                    <div class="resume-avatar-upload">
                                       <p>
                                          <i class="fa fa-upload"></i>
                                          upload
                                       </p>
                                       <input type="file">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        
                           <h3>Personal Information</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="user_name">Your Name:</label>
                                 <input type="text" name="user_id" id="user_id" value="<?php echo $row['user_id']; ?>" hidden>
                                 <input type="text" placeholder="Your Full Name" id="user_name" value="<?php echo $row['user_name']; ?>">
                              </div>
                             <div class="single-input">
                                 <label for="email_id">Email:</label>
                                 <input type="email" placeholder="Your Email Address" id="email_id" value="<?php echo $row['email_id']; ?>">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                               <div class="single-input">
                                 <label for="contact">Phone:</label>
                                 <input type="text" placeholder="Phone Number" id="contact" value="<?php echo $row['contact']; ?>">
                              </div>
                              <div class="single-input">
                                 <label for="dob">Date Of Birth:</label>
                                 <input type="text" placeholder="Phone Number" id="contact" value="<?php echo $row['date_of_birth']; ?>">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                               <div class="single-input">
                                 <label for="gender">Gender:</label>
                                <input type="radio" id="Male" name="gender" value="Male"  <?php if ($row['gender'] == 'Male' ) echo 'checked' ; ?>>Male
                                                    <input type="radio" id="Female" name="gender" value="Female"  <?php if ($row['gender'] == 'Female' ) echo 'checked' ; ?>>Female
                              </div>
                              <div class="single-input">
                                 <label for="exp_fre">Experience/Fresher</label>
                                 <input type="radio" id="exp_fre" name="seeker" value="Experience"  <?php if ($row['exp_fre'] == 'Experience' ) echo 'checked' ; ?>>Experience
                                                    <input type="radio" id="fresher" name="seeker" value="Fresher"  <?php if ($row['exp_fre'] == 'Fresher' ) echo 'checked' ; ?>>Fresher
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Region">Country:</label>
                                <select class="form-control" id="country_id" name="country_id" onchange="getStatee(<?php echo $row['state_id']; ?>)">
                                    <option value="">Choose job country</option>
                                        
                                        <?php 
                                        foreach($countryList as $tagData){ 
                                        ?>
                                        <option value="<?php echo $tagData['country_id']; ?>" <?php 
                                        if($row['country_id']==$tagData['country_id'])
                                        {
                                            echo "selected";
                                        }
                                        ?>><?php echo $tagData['country_name']; ?></option>
                                    <?php } ?>
                                    </select>
                              </div>
                              <div class="single-input">
                                 <label for="state_id">State:</label>
                                        <select class="form-control" id="state_id" name="state_id" onchange="getCityy(<?php echo $row['city_id'] ;?>)">
                                    <option value="">Choose job state</option>
                                 
                                    </select>
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                  <label for="city_id">City:</label>
                                       <select class="form-control" id="city_id" name="city_id">
                                    <option value="">Choose job city</option>
                                       
                                    </select>
                              </div>
                              <div class="single-input">
                                
                                       <label for="streetr">Street:</label>
                                       <input type="text" name="street" id="street" class="form-control" placeholder="Enter street" value="<?php echo $row['street'] ;?>">
                              </div>

                              
                           </div>
                           
                        </div>
                      <?php
                      }
                      ?>  
                        
                          
                       

         <!-- Education -->
         <div class="form with-line">
            <h5>Education </h5>
            <div class="form-inside">

               <!-- Add Education -->
               <div class="form boxed box-to-clone education-box">
                  <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                  <input class="search-field" type="text" placeholder="School Name/University Name" id="university_name" name="university_name" />
                  <input class="search-field" type="text" placeholder="Qualification(s)" id="degree_name" name="degree_name" />
                   <select id="specialization" name="specialization" class="form-control" >
                                 <option value="0">Specialization</option>
                                 
                                        <?php foreach($this->addResume_model->selectsp() as $tagData): ?>
                                <option value="<?php echo $tagData->specialization_id; ?>" 

                                 ><?php echo $tagData->specialization; ?></option><?php endforeach; ?>
                                
                              </select><br>
                  <input class="search-field" type="text" placeholder="Percentage/CGPA" id="per_cgpa" name="per_cgpa" />
                  <select id="course_type" class="form-control" >
                     <option>Course Type</option>
                     <option>Full Time</option>
                     <option>Part Time</option>
                     <option>External</option>
                  </select>
                  <input class="search-field" type="text" placeholder="Start date" id="starting_date" name="starting_date" />
                  <input class="search-field" type="text" placeholder="End date" id="completion_date" name="completion_date" />
                  <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
               </div>

               <a href="#" class="button gray add-education add-box"><i class="fa fa-plus-circle"></i> Add Education</a>
            </div>
         </div>
<div class="form with-line">
            <h5>Experience <span>(optional)</span></h5>
            <div class="form-inside">

               <!-- Add Experience -->
               <div class="form boxed box-to-clone experience-box">
                  <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                  <select id="jobtitle" name="jobtitle" class="form-control" >
                                 <option value="0">Job Title</option>
                                 
                                        <?php foreach($this->addResume_model->selectjt() as $tagData): ?>
                                <option value="<?php echo $tagData->job_title_id; ?>" 

                                 ><?php echo $tagData->job_title; ?></option><?php endforeach; ?>
                                
                              </select><br>
                             
                  <select id="designation" name="designation" class="form-control" >
                                 <option value="0">Designation</option>
                                 
                                        <?php foreach($this->addResume_model->selectdesi() as $tagData): ?>
                                <option value="<?php echo $tagData->designation_id; ?>" 

                                 ><?php echo $tagData->designation; ?></option><?php endforeach; ?>
                                
                              </select><br>
                  <input class="search-field" type="text" placeholder="Company Name" id="companyname" name="companyname" />
                  <input class="search-field" type="text" placeholder="Current Salary" id="salary" name="salary" />
                  <input class="search-field" type="text" placeholder="Start date" id="start_date" name="start_date" />
                   <input class="search-field" type="text" placeholder="End date" id="end_date" name="end_date" />
                   <input class="search-field" type="text" placeholder="Job Location" id="job_location" name="job_location" />
                  <textarea name="desc1" id="desc1" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
               </div>

               <a href="#" class="button gray add-experience add-box"><i class="fa fa-plus-circle"></i> Add Experience</a>
            </div>
         </div>

         <!-- skill  -->

         <div class="form with-line">
            <h5>Skills & Portfolio </h5>
            <div class="form-inside">

               <!-- Add skill -->
               <div class="form boxed box-to-clone education-box">
                  <a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
                 <!--  <input type="text" class="search-field" placeholder="Comma separate a list of relevant skills" id="skill"> -->
                  <select id="skill" name="skill" class="form-control" >
                                 <option value="0">Skills</option>
                                 
                                        <?php foreach($this->addResume_model->selectskill() as $tagData): ?>
                                <option value="<?php echo $tagData->skill_id; ?>" 

                                 ><?php echo $tagData->skill_name; ?></option><?php endforeach; ?>
                                
                              </select><br>
                  
                  
               </div>

               <a href="#" class="button gray add-education add-box"><i class="fa fa-plus-circle"></i> Add Skill</a>
            </div>
         </div>

         
         

         
                           
                        </div>
                        <div class="submit-resume">
                           <button type="button" onclick="add()">Save Resume</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Submit Resume Area End -->
       <!-- Footer Area Start -->
      <?php  $this->load->view('user/templates/useraccount-footer');?>
       <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/addResume.js?<?php echo rand(0,9999);?>"></script>
      <!-- Footer Area End -->
       
       <script src="<?php echo base_url();  ?>user_assets/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/custom.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/jquery.superfish.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/jquery.themepunch.showbizpro.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/jquery.jpanelmenu.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/stacktable.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/slick.min.js"></script>
<script src="<?php echo base_url();  ?>user_assets/js/headroom.min.js"></script>
     
       
       
      <!--Jquery js-->
     
    
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/submit-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:55 GMT -->
</html>

