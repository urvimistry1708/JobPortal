<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    
<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 06:50:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <title>JobBuzz</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for form layouts" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <?php  $this->load->view('admin/templates/useraccount-header');?>
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">

             <?php  $this->load->view('admin/templates/navigationlink');?>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="page-container">
              <!-- BEGIN SIDEBAR -->
                <?php  $this->load->view('admin/templates/sidebar');?>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                      <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                            <div class="page-content">

                                 <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                                    <i class="icon-calendar"></i>&nbsp;
                                    <span class="thin uppercase hidden-xs">February 24, 2019 - February 24, 2019</span>&nbsp;
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                                            <div class="portlet light bg-inverse">
                                                <div class="portlet-title">
                                                    
                                                    <div class="tools">
                                                        <a href="#" class="collapse"> </a>
                                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                        <a href="#" class="reload"> </a>
                                                        <a href="#" class="remove"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body form">
                                                    <!-- BEGIN FORM-->
                                                    <form action="job/view" id="job" name="job" class="horizontal-form">
                                                        <?php
                                                         foreach($job_list as $list)
                                                         {
                                                        ?>
                                                       <h3> <div class="form-body">
                                                            <div class="caption">
                                                        <i class="icon-equalizer font-red-sunglo"></i>
                                                        <span class="caption-subject font-red-sunglo bold uppercase">Job</span>
                                                        <span class="caption-helper"></span>
                                                    </div></h3>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="control-label">Job Title</label>
                                    <input type="text" name="job_id" id="job_id" value="<?php echo $list['job_id'];?>" hidden>
                                    <select class="form-control" id="jobtitle" name="jobtitle">
                                    <option value="">Choose a job title</option>
                                    <?php foreach($this->job_model->job_title() as $tagData): ?>
                                    <option value="<?php echo $tagData->job_title_id; ?>"<?php
                                    if($tagData->job_title_id==$list['job_title_id'])
                                    {
                                         echo 'selected';
                                    }
                                     ?>><?php echo $tagData->job_title; ?></option><?php endforeach; ?>
                                                           
                           </select>
                             <span id="err_jobtitle" class="text-danger"></span>
                        </div>
                  </div>
                   <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="control-label">Company</label>
                                     <select class="form-control" id="company_name" name="company_name">
                                    <option value="">Choose Company</option>
                                     <?php foreach($this->job_model->company() as $tagData): ?>
                                    <option value="<?php echo $tagData->company_profile_id; ?>"<?php
                                    if($tagData->company_profile_id==$list['company_profile_id'])
                                    {
                                         echo 'selected';
                                    }
                                     ?>><?php echo $tagData->company_name; ?></option><?php endforeach; ?>
                                    </select>
                                    <span id="err_jobcompany" class="text-danger"></span>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                                                                <!--/span-->
                                 <div class="col-md-6">
                                        <div class="form-group">
                                       <label class="control-label">Description</label>
                                        <input type="text" id="description" name="description" class="form-control" placeholder="Enter description" value=
                                        "<?php echo $list['description']; ?>">
                                                                    </div>
                                                                </div>
                                                           
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                <label class="control-label">Experience</label>
                                             <select class="form-control" id="experience" name="experience">
                                            <option><?php echo $list['experience']; ?></option>
                                              <option value="">Years</option>
                                        <option value="0">0 Year</option>
                                        <option value="1">1 Year</option>
                                        <option value="2">2 Year</option>
                                        <option value="3">3 Year</option>
                                        <option value="4">4 Year</option>
                                     <option value="5">5 Year</option>
                                    <option value="6">6 Year</option>
                                    <option value="7">7 Year</option>
                                    <option value="8">8 Year</option>
                                    <option value="9">9 Year</option>
                                <option value="10">10 Year</option>
                                </select>
                                <span id="err_experience" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <!--/span-->
                                                                <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                             <label class="control-label">Require Skills</label>
                                        <select class="form-control" id="rskill" name="rskill">
                                        <option value="">Select Skill</option>
                                        <?php foreach($this->job_model->getrskill() as $tagData): ?>
                                    <option value="<?php echo $tagData->require_skill_id; ?>"<?php
                                    if($tagData->require_skill_id==$list['require_skill_id'])
                                    {
                                         echo 'selected';
                                    }
                                     ?>><?php echo $tagData->require_skill; ?></option><?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            
                                     <div class="col-md-6">
                                    <div class="form-group">
                                <label class="control-label">Minimum Qualification</label>
                                 <input type="text" id="min_qualification" name="min_qualification" class="form-control" value="<?php echo $list['min_qualification']; ?>">
 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                 <div class="col-md-6">
                                                                    <div class="form-group">
                                                    <label class="control-label">Maximum age</label>
                                                <select class="form-control" id="minimumage" name="minimumage">
                                                    <option><?php echo $list['max_age']; ?></option>
                                             <option value="">Age</option>
                                                <option value="15-20">15-20</option>
                                            <option value="20-25">20-25</option>
                                                                            <option value="25-30">25-30</option>
                                                                            <option value="30-35">30-35</option>
                                                                            <option value="35-40">35-40</option>
                                                                            <option value="Above 40">Above 40</option>
                                                                        </select>
                                                                        <span id="err_minimumage" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                            
                                    <div class="col-md-6">
                                     <div class="form-group">
                                    <label class="control-label">Salary Range</label>
                                    <select class="form-control" id="salaryrange" name="salaryrange">
                                    <option><?php echo $list['salary_range']; ?></option> 
                                    <option>Choose Salary</option>   
                                   <option value="1-10 lacs">1-10 Lacs</option>
                                     <option value="10-20 lacs">10-20 Lacs</option>
                                     <option value="20-30 lacs">20-30 Lacs</option>
                                    <option value="30-40 lacs">30-40 Lacs</option>
                                 <option value="40-50 lacs">40-50 Lacs</option>
                                 <option value="50-60 lacs">50-60 Lacs</option>
                                 <option value="60-70 lacs">60-70 Lacs</option>
                                 <option value="70-80 lacs">70-80 Lacs</option>
                                <option value="80-90 lacs">80-90 Lacs</option>
                                <option value="90 above">90 Above</option>
                                    </select>
                                <span id="err_salaryrange" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <!--/span-->
                                         <div class="row">
                                    <div class="col-md-6">
                                     <div class="form-group">
                                     <label class="control-label">Job Type</label>
                                  <select class="form-control" id="jobtype" name="jobtype">
                                  <option><?php echo $list['job_type']; ?></option> 
                                     <option value="">Select JobType</option>
                                                <option value="Freelance">Freelance</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Intership">Intership</option>
                             <option value="Temporary">Temporary</option>
                                    </select>
                                                                        <span id="err_jobtype" class="text-danger"></span>
                                                                    </div>
                                                                </div> 
                                                            
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Job Location</label>
                                                 <input typr="text" id="joblocation" name="joblocation" class="form-control" value="<?php echo $list['job_location']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                    <div class="row">
                            <div class="col-md-6">
                                             <div class="form-group">
                                        <label class="control-label">Working Hour</label>
                                     <select class="form-control" id="workinghour" name="workinghour">
                                    <option><?php echo $list['working_hours']; ?></option> 
                                      <option value="">Hours</option>
                                     <option value="1">1 Hour</option>
                                   <option value="2">2 Hour</option>       
                                 <option value="3">3 Hour</option>
                                 <option value="4">4 Hour</option>
                                <option value="5">5 Hour</option>
                                <option value="6">6 Hour</option>
                                 <option value="7">7 Hour</option>
                                <option value="8">8 Hour</option>
                                <option value="9">9 Hour</option>
                                <option value="10">10 Hour</option>
                                 </select>
                                 <span id="err_workinghour" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                            
                                                        
                                     <div class="col-md-6">
                                   <div class="form-group">
                                    <label class="control-label">Last Apply Date </label>
                                    <input type="date" id="lastapplydate" name="lastapplydate" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo $list['last_apply_date'];?>">
                                    <span id="err_lastapplydate" class="text-danger"></span>
                                                                     </div>
                                                                </div>
                                                            </div>
                                        <div class="row">
                                     <div class="col-md-6">
                                     <div class="form-group">
                                   <label class="control-label">Entry Date </label>
                                 <input type="date" name="entrydate" id="entrydate" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo $list['entry_date'];?>">
                                <span id="err_entrydate" class="text-danger"></span>
                                                                     </div>
                                                                </div>
                                                        
                                 <div class="col-md-6">
                              <div class="form-group">
                             <label class="control-label">Job Closed Date </label>
                        <input type="date" class="form-control" id="jobcloseddate" name="jobcloseddate" placeholder="dd/mm/yyyy" value="<?php echo $list['job_close_date'];?>">
                         <span id="err_jobcloseddate" class="text-danger"></span>
                                                                     </div>
                                                                </div>
                                                            </div>
                                                            <?php

                                                        }
                                                        ?>
                                                     <div class="form-actions left">
                                                           
                                                            <input type="button" onclick="updatedata()" value="Update" class="btn blue">
                                                                <i class="fa fa-check"></i> 
                                                                 <button type="button" class="btn default">Cancel</button>
                                                        </div>
                                                    </form>
                                                    <!-- END FORM-->

                                                </div>

                                            </div>

                                        </div>
                                            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com/">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>  
       <!-- BEGIN QUICK NAV -->
       
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <?php $this->load->view('admin/templates/useraccount-footer')?>
         <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js?<?php echo rand(0,9999);?>"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/job.js?<?php echo rand(0,9999);?>"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    <!-- Google Code for Universal Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-W276BJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W276BJ');</script>
<!-- End -->
</body>



<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 06:50:56 GMT -->
</html>