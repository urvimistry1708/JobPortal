<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/browse-candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:00 GMT -->
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
      <div id="filterdata">
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Browse Candidates</h3>
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
                           <li><a href="#">employers</a></li>
                           <li class="active-breadcromb"><a href="#">Browse Candidates</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Top Job Area Start -->
      <section class="jobguru-top-job-area browse-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-3">
                  <div class="job-grid-sidebar">
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-category">
                        <h3>Specialization</h3>
                        <div class="job-sidebar-box">
                           <form>
                               <select class="sidebar-category-select-2"   id="specialization" name="specialization">
                                 <option value="0">Any specialization</option>
                                 <?php foreach($this->browsecandidate_model->selectsp() as $tagData): ?>
                                <option value="<?php echo $tagData->specialization_id; ?>"><?php echo $tagData->specialization; ?></option><?php endforeach; ?>
                                
                              </select>                           </form>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-category">
                        <h3>Category</h3>
                        <div class="job-sidebar-box">
                           <form>
                               <select class="sidebar-category-select-2"   id="jobtitlee" name="jobtitlee">
                                 <option value="0">Any Category</option>
                                 <?php foreach($this->browsecandidate_model->selectjob() as $tagData): ?>
                                <option value="<?php echo $tagData->job_title_id; ?>"><?php echo $tagData->job_title; ?></option><?php endforeach; ?>
                                
                              </select>                           </form>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                    
                    
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-salary">
                        <h3>Filter by Rate</h3>
                        <div class="job-sidebar-box">
                           <p>
                              <input type="text" id="amount" onchange="fetchdata()"  readonly>
                           </p>
                           <div id="slider" data-min="1500" data-max="20000" data-max-name="max_sal" data-min-name="min_sal" >
                             
                           </div>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                  </div>
               </div>
               <div class="col-md-12 col-lg-9">
                  <div class="job-grid-right">
                     
                     <!-- end job head -->
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
                                       <!-- <img src="<?php echo base_url();?>user_assets/img/de.svg" alt="region" /> -->
                                    </div>
                                    <div class="candidate-text-inner">
                                    <p><?php echo $row['job_title'];  ?></p>
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
                                       <p class="company-state"><i class="fa fa-map-marker"></i> <?php echo $row['state_name'];  ?></p>
                                       <p class="varify"><i class="fa fa-check"></i>  <?php echo $row['current_salary'];  ?>/ hr</p>
                                    </div>
                                    <div class="candidate-action">
                                       <a href="#" class="jobguru-btn-2">view profile</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Single Candidate List -->
                        <?php
                     }
                     ?>
                        <!-- End Single Candidate List -->
                     </div>
                     <div class="pagination-box-row">
                        <p>Page 1 of 6</p>
                        <ul class="pagination">
                           <li class="active"><a href="browsecandidates/paging?page=<?php echo "1"; ?>">1</a></li>
                           <li><a href="browsecandidates/paging?page=<?php echo "2"; ?>">2</a></li>
                           <li><a href="#">3</a></li>
                         <li><a href="#">4</a></li>
                         <li><a href="#">5</a></li>
                           <li><a href="#">6</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
      <!-- Top Job Area End -->
       
       
      <!-- Footer Area Start -->
           <?php  $this->load->view('user/templates/useraccount-footer');?>
           <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/browsecandidates.js?<?php echo rand(0,9999);?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
            $('#jobtitlee').on('change',function () 
            {
                var value = $(this).val();
                $.ajax({
                    url: "browsecandidates/ser",
                    type: "POST",
                    data: 'job_title_id='+value,
                    success: function(data)
                     {
                     if(data!="")
                     {
                        $('#filterdata').html(data);
                     }
                     else
                     {
                        alert("failed");
                     }
 
                    }
                });
            });
             $('#specialization').on('change',function () 
            {
                var value = $(this).val();
                $.ajax({
                    url: "browsecandidates/sersp",
                    type: "POST",
                    data: 'specialization_id='+value,
                    success: function(data)
                     {
                     if(data!="")
                     {
                        $('#filterdata').html(data);
                     }
                     else
                     {
                        alert("failed");
                     }
 
                    }
                });
            });
            
        });
 
         </script>
      <!-- Footer Area End -->
       
       
      
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/browse-candidates.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:08:01 GMT -->
</html>

