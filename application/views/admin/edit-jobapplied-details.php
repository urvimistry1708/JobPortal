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
                        
                                                <div class="portlet-body form">
                                                    <!-- BEGIN FORM-->
                                                    <form action="" id="job-applied" class="horizontal-form">
                                                        <?php
                                                           foreach($jobappliedlist as $list)
                                                           {
                                                        ?>
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
                                                <form  id="job-applied" class="horizontal-form">
                                                        <div class="form-body">
                                                            <h3 class="form-section"> <div class="form-body">
                                                            <div class="caption">
                                                        <i class="icon-equalizer font-red-sunglo"></i>
                                                        <span class="caption-subject font-red-sunglo bold uppercase">job applied Details</span>
                                                        <span class="caption-helper"></span>
                                                    </div></h3>
                                                    
                                                   <div class="row">
                                                    <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Job Title</label>
                                                                        <input type="text" name="job_applied_id" id="job_applied_id" value="<?php echo $list['job_applied_id'];?>" hidden>
                                                                        <select class="form-control" id="jobtitle" name="jobtitle">
                                                                           <option value="<?php echo $list['job_id'] ;?>"><?php echo $list['job_title']; ?></option> 
                                                                           <option value="">Choose a job title</option>
                                                                    <?php foreach($this->Jobapplied_model->getjob() as $tagData): ?>
                                                                    <option value="<?php echo $tagData->job_title_id; ?>"><?php echo $tagData->job_title; ?></option><?php endforeach; ?>
                                                                        </select>
                                                                        <span id="err_jt" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                     <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">User</label>
                                                                        <select class="form-control" id="username" name="username">
                                                                            <option value="<?php echo $list['user_id'] ;?>"><?php echo $list['user_name'] ;?></option>
                                                                           <option value="">Choose user</option>
                                                                    <?php foreach($this->Jobapplied_model->getuser() as $tagData): ?>
                                                                    <option value="<?php echo $tagData->user_id; ?>"><?php echo $tagData->user_name; ?></option><?php endforeach; ?>
                                                                        </select>
                                                                        <span id="err_uname" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                   </div>  
                                                 <div class="row">
                                                 <div class="col-md-6">
                                                    <div "form-group">
                                                    <label class="control-label">Status<span style="color: red;">*</span></label>
                                                    <input type="text" id="status" name="status" class="form-control" placeholder="Enter status " value="<?php echo $list['status']; ?>">
                                                    <span id="err_s" class="text-danger">  </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                
                                                    <div class="col-md-6">
                                                    <div "form-group">
                                                    <label class="control-label">Interview Schedule<span style="color: red;">*</span></label>
                                                    <input type="text" id="interviewschedule" name="interviewschedule" class="form-control" placeholder="Enter interview schedule" value="<?php echo $list['interview_schedule'] ;?>">
                                                    <span id="err_i" class="text-danger">  </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                             <!--/row-->
                                                     <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Entry Date<span style="color: red;">*</span></label>
                                                    <input type="date" id="entrydate" name="entrydate" class="form-control" placeholder="Enter entry date" value="<?php echo $list['entry_date']; ?>">
                                                    <span id="err_e" class="text-danger"></span>
                                                     </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <?php
                                                        }
                                                        ?>
                                                     <div class="form-actions left">
                                                         <input type="button" onclick="updatedata()" class="btn blue" id="seeker-submit" name="seeker-submit" value="Update"> 
                                                            <button type="button" class="btn default">Cancel</button>
                                                           
                                                               
                                                        </div>         
                                                    </form>
                                                    <!-- END FORM-->
                                                </div>
                                            </div>
                                        </div>

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
<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <?php $this->load->view('admin/templates/useraccount-footer')?>
         <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js?<?php echo rand(0,9999);?>"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jobapplied.js?<?php echo rand(0,9999);?>"></script>
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