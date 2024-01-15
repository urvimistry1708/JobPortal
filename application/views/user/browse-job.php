<!DOCTYPE html>
<html lang="en-US">
   
<!-- Mirrored from themescare.com/demos/jobguru/job-grid-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:51 GMT -->
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
                        <h3>Browse Jobs</h3>
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
                           <li class="active-breadcromb"><a href="#">browse jobs</a></li>
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
               <div class="col-lg-3 col-md-12">
                  <div class="job-grid-sidebar">
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-category">
                        <h3>Location</h3>
                        <div class="job-sidebar-box">
                           <div class="job-browse-search">
                           <form>
                              <input type="text"  id="searchloc" name="searchloc" placeholder="job Location">
                              <button type="button" onclick="searchlocc()"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                           </form>
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
                                 <?php foreach($this->browsejob_model->selectjob() as $tagData): ?>
                                <option value="<?php echo $tagData->job_title_id; ?>"><?php echo $tagData->job_title; ?></option><?php endforeach; ?>
                                
                              </select>
                           </form>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                    
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-type">
                        <h3>job type</h3>
                        <div class="job-sidebar-box">
                           <div class="form-group form-radio">
                              <input id="freelancer" name="radio" type="radio" value="freelancer">
                              <label for="freelancer" class="inline control-label">freelancer</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="Full_Time" name="radio" type="radio" value="Full Time">
                              <label for="Full_Time" class="inline control-label">Full Time</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="Internship" name="radio" type="radio" value="Internship">
                              <label for="Internship"  class="inline control-label">Internship</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="Part_Time" name="radio" type="radio" value="Part Time">
                              <label for="Part_Time" class="inline control-label">Part Time</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="Temporary" name="radio" type="radio" value="Temporary">
                              <label for="Temporary" class="inline control-label">Temporary</label>
                           </div>
                             
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-salary">
                        <h3>Filter by Salary</h3>
                        <div class="job-sidebar-box">
                           <p>
                             <div data-min="1500" data-max="20000" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false" id="slider" name="slider"></div>
                           </p>
                           
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                  </div>
               </div>
               <div class="col-lg-9 col-md-12">
                  
                     <div class="row" >
                         <?php
                                                foreach($data as $row)
                                                {
                                                    ?>
                        <div class="col-lg-6 col-md-12">
                           <div class="sigle-top-job">
                              <div class="top-job-company-image">
                                 <div class="company-logo-img">
                                    <a href="#">
                                    <img src="<?php echo base_url().'uploads/company_profile/'.$row['company_image'] ;?>" height="60px" width="80px">
                                    </a>
                                 </div><br><br>
                              
                                <input type="text" name="job_list" id="job_list" value="<?php echo $row['job_id']; ?>" > 
                                 <br>
                                
                                 <h3><a href="#"><?php echo $row['job_title']; ?></a></h3>
                              </div>
                              <div class="top-job-company-desc">
                                 <ul>
                                   
                                    <li>Location <span class="company-state"><i class="fa fa-map-marker"></i><?php echo $row['job_location'];?></span></li>
                                    <li>salary <span class="open-icon"><i class="fa fa-credit-card-alt"></i><?php echo $row['salary_range']; ?></span></li>
                                    <li>status <span class="varify"><i class="fa fa-check"></i><?php echo $row['job_type']; ?></span></li>
                                 </ul>
                                 
                                 <?php
                                   if(isset($_SESSION['seeker_email_id']))
                                   {
                                     if(isset($_SESSION['score']))
                                     {
                                    foreach($User as $usr)
                                    {
                                 ?>

                                 <div class="top-job-company-btn">
                                    <a class="jobguru-btn-2" onclick="addJob(<?php echo $usr['user_id']; ?>)" >Bid now</a>
                                 </div>
                                 <?php
                               }
                               }
                               else
                               {
                                ?>
                                <div class="top-job-company-btn">
                                    <a href="<?php echo site_url("user/test"); ?> " class="jobguru-btn-2">Test</a>
                                 </div>
                                 <?php
                               }
                             }
                               else
                               {
                                ?>
                                <div class="top-job-company-btn">
                                    <a href="<?php echo site_url("user/loginuser"); ?> " class="jobguru-btn-2">Login</a>
                                 </div>
                                <?php
                               }
                                ?>
                                
                              </div>
                           </div>
                        </div>

                         <?php
                              }
                                 ?>
                                 </div>
                        <div class="row">
               <div class="col-md-12">
                  <div class="pagination-box-row">
                    <center> <p>Page 1 of 6</p>
                     <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>...</li>
                        <li><a href="#">6</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                     </ul></center>
                  </div>
               </div>
            </div>
         </div>
                     <!-- end pagination row -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- Top Job Area End -->
       
       
      <!-- Footer Area Start -->
      <?php  $this->load->view('user/templates/useraccount-footer');?>
      <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/browsejob.js?<?php echo rand(0,9999);?>"></script>
         <script type="text/javascript">
            $(document).ready(function () {
            $('#jobtitlee').on('change',function () 
            {
                var value = $(this).val();
                $.ajax({
                    url: "browsejob/ser",
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
            $('input[name="radio"]').change(function () {
                    //var $this = $(this);
                    var checkboxData = $('input[name="radio"]:checked').val();
                    $.ajax({
                        url: 'browsejob/searchjobType',
                        type: "POST",
                        data: {checkboxData:checkboxData},
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
            $('#slider').on('change',function () {
                    //var $this = $(this);
                    var amount =$('#amount').val();
                    $.ajax({
                        url: 'browsejob/searchsalary',
                        type: "POST",
                        data: {amount:amount},
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
       
       
      <!--Jquery js-->
      
   </body>

<!-- Mirrored from themescare.com/demos/jobguru/job-grid-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2019 08:07:51 GMT -->
</html>

