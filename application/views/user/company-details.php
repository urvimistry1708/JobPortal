<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/single-company.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:01 GMT -->
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
       
       
      <!-- Single Candidate Start -->
      <?php
          foreach($data as $row)
          {
      ?>
      <section class="single-candidate-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="single-candidate-box">
                     <div class="single-candidate-img">
                        <img src="<?php echo base_url().'uploads/company_profile/'.$row['company_image'] ;?>" height="100px" width="100px">
                     </div>
                     <div class="single-candidate-box-right">
                        <h4><?php echo $row['company_name'] ;?></h4>
                        
                       <!--  <p>Online Education Center</p> -->
                        <div class="single-candidate-rate">
                           <p class="rating-company">4.9</p>
                           <ul>
                            <?php
                                    if($row['rating']==1)
                                    {
                                       ?>
                                       <li><i class="fa fa-star"></i></li>
                                       <?php
                                    }
                                    if($row['rating']==2)
                                    {
                                       ?>
                                       <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <?php
                                    }
                                    if($row['rating']==3)
                                    {
                                       ?>
                                       <li><i class="fa fa-star"></i></li>
                                      <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    <?php
                                    }
                                     if($row['rating']==4)
                                    {
                                       ?>
                                       <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    <?php
                                    }
                                    if($row['rating']==5)
                                    {
                                       ?>
                                       <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       
                                    <?php
                                    }
                                    ?>
                             </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="single-candidate-action">
                     <a href="location" class="bookmarks"><i class="fa fa-map-marker"></i>See on map</a>
                     <a href="#" class="candidate-contact"><i class="fa fa-gavel"></i>posted Jobs</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Single Candidate End -->
       
       
      <!-- Single Candidate Bottom Start -->
      <div class="single-candidate-bottom-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-8">
                  <div class="single-candidate-bottom-left">
                     <div class="single-candidate-widget">
                        <h3>company description</h3>
                        <p><?php echo $row['profile_description']; ?></p>
                        <?php
                  }
                  ?>
                        <!-- <ul class="company-desc-list">
                           <li><i class="fa fa-check"></i> Sed consectetur tellus eget odio aliquet</li>
                           <li><i class="fa fa-check"></i> Morbi maximus metus vitae mollis ante imperdiet</li>
                           <li><i class="fa fa-check"></i> tellus eget vestibulum tellus sollicitudin</li>
                           <li><i class="fa fa-check"></i> eros consectetur lectus tellus eget odio aliquet</li>
                           <li><i class="fa fa-check"></i> Morbi maximus metus vitae mollis ante imperdiet</li>
                           <li><i class="fa fa-check"></i> tellus eget vestibulum tellus sollicitudin</li>
                        </ul>
                        <p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut.pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet</p>
                        <p>faucibus in malesuada a, dignissim at odio. Aenean eleifend urna.Nulla maximus volutpat dui. Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio.</p>
 -->                     </div>
 
                     <div class="single-candidate-widget">
                        <h3>(2) Open Positions</h3>

                   <?php
          foreach($companyList as $roww)
          {
      ?>

                        <div class="single-work-history company-single-page">
                           <div class="single-candidate-list">
                              <div class="main-comment">
                                 <div class="candidate-text">
                                    <div class="candidate-info">
                                       <div class="candidate-title">
                                          <h3><a href="#"><?php echo $roww['job_title']; ?></a></h3>
                                       </div>
                                       <p class="company-state">
                                          <i class="fa fa-map-marker"></i>
                                        <?php echo $roww['state_name']; ?>
                                       </p>
                                       <p class="open-icon">
                                          <i class="fa fa-clock-o"></i>
                                          <?php echo $roww['job_type']; ?>
                                       </p>
                                       <p class="varify">
                                          <i class="fa fa-check"></i>
                                          Salary : <?php echo $roww['salary_range']; ?>
                                       </p>
                                    </div>
                                    <div class="candidate-text-inner">
                                       <p><?php echo $roww['profile_description']; ?></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php
                  }
                  ?>
                        
                     </div>
                  </div>
               </div>
                
            </div>
         </div>
      </div>
      <!-- Single Candidate Bottom End -->
       
       
      <!-- Footer Area Start -->
            <?php  $this->load->view('user/templates/useraccount-footer');?>

      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
      
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/single-company.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:02 GMT -->
</html>

