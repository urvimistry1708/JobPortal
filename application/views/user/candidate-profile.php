<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/candidate-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:55 GMT -->
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
                        <h3>My Profile</h3>
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
       
       <?php
        foreach($candidatelist as $row)
       {
       ?>
      <!-- Candidate Dashboard Area Start -->
      <section class="candidate-dashboard-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-12 dashboard-left-border">
                  <div class="dashboard-left">
                     <ul class="dashboard-menu">
                        <li>
                           <a href="candidatedashboard">
                           <i class="fa fa-tachometer"></i>
                           Candidate
                           </a>
                        </li>
                        <li class="active">
                           <a href="candidateprofile">
                           <i class="fa fa-users"></i>
                           My Profile
                           </a>
                        </li>
                       <!--  <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li> -->
                      <!--   <li><a href="managejobs"><i class="fa fa-briefcase"></i>manage jobs</a></li> -->
                        <!-- <li><a href="candidate-earnings.html"><i class="fa fa-rocket"></i>earnings</a></li> -->
                        <li><a href="Candidatechangepassword"><i class="fa fa-lock"></i>change password</a></li>
                       
                     </ul>
                  </div>
               </div>
               <div class="col-lg-9 col-md-12">
                  <div class="dashboard-right">
                     <div class="candidate-profile">
                        <div class="candidate-single-profile-info">
                           <div class="single-resume-feild resume-avatar">
                              <div class="resume-image">
                                 <img src="<?php echo base_url().'uploads/user_profile/'.$row['user_image'] ;?>" >
                                 <div class="resume-avatar-hover">
                                    <div class="resume-avatar-upload">
                                       <p>
                                          <i class="fa fa-pencil"></i>
                                          Edit
                                       </p>
                                       <input type="file">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="candidate-single-profile-info">
                           <form id="candidate_profile">
                              <div class="resume-box">
                                 <h3>My Profile</h3>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="firstname">Your Name:</label>
                                       <input type="text" value="<?php echo $row['user_name'] ?>" id="firstname">
                                       <span class="text-danger" id="errname"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="desi">Designation:</label>
                                        <select class="sidebar-category-select-2"   id="desi" name="desi">
                                 <option value="0">Any Category</option>
                                 
                                        <?php foreach($this->candidate_profile_model->selectdesi() as $tagData): ?>
                                <option value="<?php echo $tagData->designation_id; ?>"  ><?php echo $tagData->designation; ?></option><?php endforeach; ?>
                                
                              </select>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="experience">Experience/Fresher:</label>
                                        <input type="radio" id="experience" name="seeker" value="Experience"  <?php if ($row['exp_fre'] == 'Experience' ) echo 'checked' ; ?>>Experience
                                                    <input type="radio" id="fresher" name="seeker" value="Fresher"  <?php if ($row['exp_fre'] == 'Fresher' ) echo 'checked' ; ?>>Fresher
                                    </div>
                                    <div class="single-input">
                                       <label for="dob">Birth Date:</label>
                                       <input type="date"  id="dob" value="<?php echo $row['date_of_birth']; ?>">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="currentsalary">Current Salary($) :</label>
                                       <input type="text" value="<?php echo $row['current_salary']; ?>" id="currentsalary">
                                    </div>
                                    
                                 </div>
                                 <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="description">Introduce Yourself:</label>
                                       <textarea id="description"><?php echo $row['description']; ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="resume-box">
                                 <h3>Contact Information</h3>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="mobileno">Phone:</label>
                                       <input type="text" value="<?php echo $row['contact']; ?>" id="mobileno">
                                       <span id="errmobileno" class="text-danger"></span>
                                    </div>
                                   
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="country_id">Contry:</label>
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
                                    <span id="errjcountry" class="text-danger"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="state_id">State:</label>
                                        <select class="form-control" id="state_id" name="state_id" onchange="getCityy(<?php echo $row['city_id'] ;?>)">
                                    <option value="">Choose job state</option>
                                 
                                    </select>
                                    <span id="errjstate"  class="text-danger"></span>
                                    </div>
                                     <div class="single-input">
                                       <label for="city_id">City:</label>
                                       <select class="form-control" id="city_id" name="city_id">
                                    <option value="">Choose job city</option>
                                       
                                    </select>
                                    <span id="errjcity" class="text-danger"></span>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="streetr">Street:</label>
                                       <input type="text" name="street" id="street" class="form-control" placeholder="Enter street" value="<?php echo $row['street'] ;?>">
                                     <span class="text-danger" id="errstreet">  </span>
                                    </div>
                                    <div class="single-input">
                                       <label for="pincode">Zip Code:</label>
                                       <input type="text" value="<?php echo $row['pincode'] ;?>" id="pincode">
                                       <span class="text-danger" id="errpincode"></span>
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="submit-resume">
                                 <button type="submit">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php
   }
      ?>
      <!-- Candidate Dashboard Area End -->
       
       
      <!-- Footer Area Start -->
      <?php  $this->load->view('user/templates/useraccount-footer');?>
      <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/update_candidate_profile.js?<?php echo rand(0,9999);?>"></script>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
     
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/candidate-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:55 GMT -->
</html>

