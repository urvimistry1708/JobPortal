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
                        <h3>Company Profile</h3>
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
                           <li class="active-breadcromb"><a href="#">Company Profile</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
        <?php
                             foreach($companylist as $row)
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
                        
                        <div class="candidate-single-profile-info">
                           
                           <form id="company_profile" name="company_profile" enctype="multipart/form-data">
                              <div class="candidate-single-profile-info">
                           <div class="single-resume-feild resume-avatar">
                              <div class="resume-image company-resume-image">
                                 <img src="<?php echo base_url().'uploads/company_profile/'.$row['company_image'] ;?>" >
                                 <!-- <div class="resume-avatar-hover">
                                    <div class="resume-avatar-upload">
                                       <p>
                                          <i class="fa fa-pencil"></i>
                                          Edit
                                       </p> -->
                                       <input type="file" id="company_image" name="company_image">
                                   <!--  </div>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                              <div class="resume-box">
                                 <h3>company profile</h3>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="companyname">Company Title:</label>
                                       <input type="text" value="<?php echo $row['company_name'] ?>" id="companyname" name="companyname">
                                    </div>
                                    <div class="single-input">
                                       <label for="establishdate">Establish date:</label>
                                       <input type="date" name="establishdate" id="establishdate" value="<?php echo $row['establish_date']; ?>">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="iso">ISO Certified:</label>
                                        <input type="checkbox" style=" margin: 5px 0px;float: left;" id="iso" name="iso" value="1"  <?php if ($row['ISO'] == '1' ) echo 'checked' ; ?>> 
                                    </div>
                                    </div>
                                 <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="profiledescription">Description:</label>
                                       <textarea id="profiledescription"><?php echo $row['profile_description']; ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="resume-box">
                                 <h3>Contact Information</h3>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="contact">Phone:</label>
                                       <input type="text" value="<?php echo $row['contact']; ?>" id="contact">
                                    </div>
                                    <div class="single-input">
                                      <!--  <label for="email">Email:</label>
                                       <input type="text" value="<?php// echo $row['email']; ?>" id="email"> -->
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
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="city_id">City:</label>
                                       <select class="form-control" id="city_id" name="city_id">
                                    <option value="">Choose job city</option>
                                       
                                    </select>
                                    <span id="errjcity" class="text-danger"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="streetr">Street:</label>
                                       <input type="text" name="street" id="street" class="form-control" placeholder="Enter street" value="<?php echo $row['street'] ;?>">
                                     <span class="help-block">  </span>
                                    </div>
                                 </div>
                              </div>
                              <!-- <div class="resume-box">
                                 <h3>social link</h3>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="twitter">
                                       <i class="fa fa-twitter twitter"></i>
                                       twitter
                                       </label>
                                       <input type="text" value="https://www.twitter.com/" id="twitter" name="twitter">
                                    </div>
                                    <div class="single-input">
                                       <label for="twitter">
                                       <i class="fa fa-facebook facebook"></i>
                                       facebook
                                       </label>
                                       <input type="text" value="https://www.facebook.com/" id="facebook" name="facebook">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="google">
                                       <i class="fa fa-google-plus google"></i>
                                       Google
                                       </label>
                                       <input type="text" value="https://www.google.com/" id="google" name="twitter">
                                    </div>
                                    <div class="single-input">
                                       <label for="linkedin">
                                       <i class="fa fa-linkedin linkedin"></i>
                                       linkedin
                                       </label>
                                       <input type="text" value="https://www.linkedin.com/" id="linkedin" name="twitter">
                                    </div>
                                 </div>
                              </div> -->
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
      <!-- Candidate Dashboard Area End -->
      <?php
                        }
                        ?>
       
       
      <!-- Footer Area Start -->
     <?php  $this->load->view('user/templates/useraccount-footer');?>
      <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/update_company_profile.js?<?php echo rand(0,9999);?>"></script>
      <!-- Footer Area End -->
       
       
      
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/company-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
</html>

