<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:41 GMT -->
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
       <?php  $this->load->view('user/templates/useraccount-header');?>
  
      <!-- Header Area End -->
       
       
      <!--Home Video Start-->
            <section class="home-video-banner parallax" data-src="<?php echo base_url();?>user_<?php echo base_url();?>user_assets/img/slider-1.jpeg" data-jarallax-video="https://www.youtube.com/watch?v=dk9uNWPP7EA&list=PL7cdQfbJcOxP_Ii2ifE-8NXj_qP1Mzb7a',containment:'#welcome-video', showControls:false, autoPlay:true, mute:true, loop:true, startAt:0, quality:'default', opacity:1,}">
         <div class="banner-area">
            <div class="banner-caption container">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 content-home">
                        <div class="banner-welcome">
                           <h4>Over <span>100,000+</span> jobs are waiting for you</h4>
                           <form>
                              <div class="video-banner-input">
                                 <input type="text" id="title" name="title" placeholder="Job Title, Keywords, or Phrase">
                              </div>
                              <div class="video-banner-input">
                                 <input type="text" id="address" name="address" placeholder="City, State or ZIP">
                              </div>
                              <div class="video-banner-input">
                                 <button type="button" name="searchBtn" onclick="searchh()" id="searchBtn"><i class="fa fa-search"></i></button>
                              </div>
                           </form>
                           <div class="top-search-cat">
                              <p>Top Search :</p>
                              <a href="#">Design</a>
                              <a href="#">Analysis</a>
                              <a href="#">training</a>
                              <a href="#">Music</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Home Video End-->
       
       
        <!-- Categories Area Start -->
      <section class="jobguru-categories-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>top Trending <span>Categories</span></h2>
                     <p>A better career is out there. We'll help you find it. We're your first step to becoming everything you want to be.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder account_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-briefcase"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Accounting & Finance</h3>
                     </div>
                     <img src="<?php echo base_url();?>user_assets/img/account_cat.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder design_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-pencil-square-o"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Design, Art & Multimedia</h3>
                     </div>
                     <img src="<?php echo base_url();?>user_assets/img/design_art.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder restaurant_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-cutlery"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Restaurant / Food Service</h3>
                     </div>
                     <img src="<?php echo base_url();?>user_assets/img/restaurent.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder tech_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-code"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Programming & Tech</h3>
                     </div>
                     <img src="<?php echo base_url();?>user_assets/img/programing_cat.jpg" alt="category" />
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder data_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-bar-chart"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Data Science & Analitycs</h3>
                     </div>
                     <img src="<?php echo base_url();?>user_assets/img/data_cat.png" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder writing_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-pencil"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Writing / Translations</h3>
                     </div>
                     <img src="<?php echo base_url();?>user_assets/img/writing_cat.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder edu_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-graduation-cap"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>Education / Training</h3>
                     </div>
                     <img src="<?php echo base_url();?>user_assets/img/edu_cat.jpg" alt="category" />
                  </a>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <a href="#" class="single-category-holder sale_cat">
                     <div class="category-holder-icon">
                        <i class="fa fa-bullhorn"></i>
                     </div>
                     <div class="category-holder-text">
                        <h3>sales / marketing</h3>
                     </div>
                     <img src="<?php echo base_url();?>user_assets/img/sale_cat.png" alt="category" />
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <br><br>
                  <center>
                     <a href="#" class="jobguru-btn">browse all categories</a>
                  </center>
               </div>
            </div>
         </div>
      </section>
      <!-- Categories Area End -->
       
       

      <!-- Video Area Start -->
      <section class="jobguru-video-area section_100">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="video-container">
                     <h2>Hire experts freelancers today for <br> any job, any time.</h2>
                     <div class="video-btn">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=k-R6AFn9-ek">
                        <i class="fa fa-play"></i>
                        how it works
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Video Area End -->
       
       
     <!-- Job Tab Area Start -->
      <section class="jobguru-job-tab-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>Companies & <span>job offers</span></h2>
                     <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes</p>
                  </div>
               </div>
            </div>
            <div class="row">
              <div id="div1">
               <!-- <div class="col-md-12">
                  
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                        <div class="top-company-tab">
                           <ul>
                              <?php
                                     //foreach($data as $list)
                                     {
                                 ?>
                              <li>
                                 
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                     <img src="<?php echo base_url().'uploads/company_profile/'.$list['company_image'] ;?>" height="60px" width="80px">
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href="#"><?php echo $list['company_name']; ?></a></h3>
                                       <h3><a href="#"><?php echo $list['job_title']; ?></a></h3>
                                       <p class="company-state"><i class="fa fa-map-marker"></i><?php echo $list['state_name']; ?></p>
                                       <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                       <p class="varify"><i class="fa fa-check"></i>
                                          <?php
                                           if($list['ISO']==1)
                                           {
                                             ?>
                                             ISO Certified
                                             <?php
                                           }
                                           else
                                           {
                                             ?>
                                             Not ISO Certified
                                             <?php
                                           }
                                          ?></p>
                                       <p class="rating-company"><?php echo $list['rating']; ?></p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="companydetails?company_profile_id=<?php echo $list['company_profile_id']; ?>" class="jobguru-btn">view profile</a>
                                    </div>
                                 </div>
                              </li>
                              <?php
                           }
                           ?>
                              
                           </ul>
                        </div>
                     </div>
                   
                  </div>
               </div> -->
            </div>
            </div>
           
         </div>
      </section>
      <!-- Job Tab Area End -->
       
       
      <!-- Pricing Area Start -->
      <section class="jobguru-pricing-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>choose best <span>plan</span></h2>
                     <p>A better career is out there. We'll help you find it. We're your first step to becoming everything you want to be.</p>
                  </div>
               </div>
            </div>
            <div class="row">
              <?php
              
                 foreach($package as $row)
                 { 
               ?>
                <div class="col-md-4 no-pad-all">
                  <div class="single-pricing price-standard">
                     <div class="price-heading">          
                         <h3><?php echo $row['package_type']; ?></h3>
                     </div>
                     <div class="price-value">
                     &nbsp&nbsp&nbsp<h2 id="package_price"><i class="fa fa-dollar"></i><?php echo $row['package_price']; ?></h2>
                        <p></i><?php echo $row['package_visibility']; ?></p>
                     </div>
                     <div class="price-btn">
                          <?php
                                         if(isset($_SESSION['employe_email_id']) && isset($_SESSION['employe_password']))
                                         {
                                                                                     
                                          foreach($company as $roww)
                                             { 
                                          ?>
                   
                   <input type="text" name="c_id" id="c_id" value="<?php echo $roww['company_profile_id']; ?>" hidden>
                               <?php
                                           } 
                                 ?>
                                         <li class="has-inner-child">
                                       <a onclick="booknow(<?php echo $row['package_id'];?>)" class="jobguru-btn-2">Book Now</a> 
                                    </li>
                                   
                                       <?php
                                    }
                                    else
                                    {
                                       ?>
                                     
                                    <li class="has-inner-child">
                                       <a href="<?php echo site_url("user/loginuser"); ?>" class="jobguru-btn-2">Login</a> 
                                    </li>
                                     
                                    <?php 
                                    }

                                    ?>
                                   
                     </div>
                     <div class="price-body">
                        <p>Features of <?php echo $row['package_type']; ?> Plan</p>
                        <!-- <p>1 Listing</p> -->
                        <p><?php echo $row['package_visibility']; ?></p>
                        <p><?php echo $row['package_resumes']; ?></p>
                        
                     </div>
                  </div>
               </div>
              
              <?php
           
        }
           
           ?>
               
            </div>
         </div>
      </section>
      <!-- Pricing Area End -->
       
       
     <!-- Happy Freelancer Start -->
      <section class="jobguru-happy-freelancer-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>What Our  <span>Users Say</span></h2>
                     <p>We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="happy-freelancer-slider owl-carousel">
                     <div class="single-happy-freelancer">
                        <div class="happy-freelancer-img">
                           <img src="<?php echo base_url();?>user_assets/img/f3.jpg" alt="testimonial 1" />
                        </div>
                        <div class="happy-freelancer-text">
                           <p>As an employer a great company to work in.
Lots of money being spend on New (Cloud) Products and positive modifications being made on Existing products makes it a customer centric company.
In the recruitment segment it has taken great care in terms of making sure that the intrest of both the Job Seekers and Employers are not compromised.</p>
                           <div class="happy-freelancer-info">
                              <h4>nikita ijner</h4>
                              <p>Employer</p>
                           </div>
                        </div>
                     </div>
                     <div class="single-happy-freelancer">
                        <div class="happy-freelancer-img">
                           <img src="<?php echo base_url();?>user_assets/img/f4.jpg" alt="testimonial 1" />
                        </div>
                        <div class="happy-freelancer-text">
                           <p>GRADUATED! no placemnt looking for job?, the best place is jobbuzz.com. I got appropiate calls from jobbuzz.com who share m profile directly to the company and conducted m interveiw without any charge!. trust me I get m job basis of m qualification n skill not by paying some bucks. its the best portal for job seekers go for it.</p>
                           <div class="happy-freelancer-info">
                              <h4>manuni patel</h4>
                              <p>Job Seekers</p>
            
                           </div>
                        </div>
                     </div>
                     <div class="single-happy-freelancer">
                        <div class="happy-freelancer-img">
                           <img src="<?php echo base_url();?>user_assets/img/f2.jpg" alt="testimonial 1" />
                        </div>
                        <div class="happy-freelancer-text">
                           <p> I am getting a lot of offers from this site. I always follow up this site. I always try to update my resume. If there is any job matching to my desired criteria then I get mail on my gmail account. The information provided by this site is true and trusted. They keep secret our data. There is no chance of any missuse of our details.</p>
                           <div class="happy-freelancer-info">
                              <h4>riddhi galiawala</h4>
                               <p>Job Seekers</p>
                           </div>
                        </div>
                     </div>
                     <div class="single-happy-freelancer">
                        <div class="happy-freelancer-img">
                           <img src="<?php echo base_url();?>user_assets/img/f1.jpg" alt="testimonial 1" />
                        </div>
                        <div class="happy-freelancer-text">
                           <p> employers get to access big pool of available candidates. Presently, jobbuzz has over a crore of active candidates on its' portal. Earlier, employers used to get CVs by post, used to read them and then contact candidates by post or landlines.I can say emphatically technology and jobsites like jobbuzz have changed the job scenario drastically.</p>
                           <div class="happy-freelancer-info">
                              <h4>viraj zaveri</h4>
                              <p>Employer</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Happy Freelancer End -->
       
       
      <!-- Blog Area Start -->
      <section class="jobguru-blog-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h2>Recent From <span>Blog</span></h2>
                     <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-12">
                  <a href="#">
                     <div class="single-blog">
                        <div class="blog-image">
                           <img src="<?php echo base_url();?>user_assets/img/blog-1.jpg" alt="blog image" />
                           <p><span> 21</span> July</p>
                        </div>
                        <div class="blog-text">
                           <h3>If you're having trouble coming up with</h3>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-lg-4 col-md-12">
                  <a href="#">
                     <div class="single-blog">
                        <div class="blog-image">
                           <img src="<?php echo base_url();?>user_assets/img/blog-2.jpg" alt="blog image" />
                           <p><span> 21</span> July</p>
                        </div>
                        <div class="blog-text">
                           <h3>details about Apple’s new iPad Pro models</h3>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-lg-4 col-md-12">
                  <a href="#">
                     <div class="single-blog">
                        <div class="blog-image">
                           <img src="<?php echo base_url();?>user_assets/img/blog-3.jpg" alt="blog image" />
                           <p><span> 21</span> July</p>
                        </div>
                        <div class="blog-text">
                           <h3>what are those Steps to be a Successful developer</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>  
      <!-- Blog Area End -->
       
       
      <!-- Footer Area Start -->
       <?php  $this->load->view('user/templates/useraccount-footer');?>
        <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/home.js?<?php echo rand(0,9999);?>"></script>
       
       </script>
      <!-- Footer Area End -->
       <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ce7f0cda667a0210d594761/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
       
      <!--Jquery js-->
         </body>

<!-- Mirrored from themescare.com/demos/jobguru/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:51 GMT -->
</html>

