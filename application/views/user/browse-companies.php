<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/browse-companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:51 GMT -->
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
                        <h3>Browse companies</h3>
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
                           <li class="active-breadcromb"><a href="#">browse companies</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Browse Company Area Start -->
      <section class="jobguru-browse-company-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <?php
                  $char=range('A', 'Z');
                  echo '<ul class="nav nav-tabs" id="myTab" role="tablist">';
                  foreach($char as $alpha)
                   {
                     echo '<li class="nav-item">
                        <a class="nav-link active" id="company_a_tab"  href="browsecompanies?char='.$alpha.'" role="tab" aria-controls="company_a" aria-selected="true">'.$alpha.'</a>
                     </li>';
                  }
                        
                  echo '</ul>';
                  ?>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                        <div class="row">
                           <?php
                                                foreach($searchResult as $row)
                                                {
                                                    ?>
                           <div class="col-lg-4 col-md-12 companyBox moreBox">
                              <div class="single-browse-company">
                                 <div class="browse-company-logo">
                                    <a href="#">
                                    <img src="<?php echo base_url().'uploads/company_profile/'.$row['company_image'] ;?>" height="60px" width="80px">
                                    </a>
                                 </div>
                                 <h3><a href="#"><?php echo $row['company_name'];  ?></a></h3>
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
                                 <div class="single-browse-company-btn">
                                    <a href="companydetails?company_profile_id=<?php echo $row['company_profile_id']; ?>" class="jobguru-btn">view profile</a>
                                 </div>
                              </div>
                           </div>
                        
                           <?php
                              }
                                 ?>
                                  </div>
                                 <br><br>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="load-more">
                           <center>
                           <a href="browsecompanies" id="loadMore" class="jobguru-btn-2">Load More companies</a>
                            </center> 
                        </div>
                     </div>
                  </div>
                       
                    
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Browse Company Area End -->
       
       
      <!-- Footer Area Start -->
      <?php  $this->load->view('user/templates/useraccount-footer');?>
      <!-- Footer Area End -->
       
     
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/browse-companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:54 GMT -->
</html>

