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
                                                    <form action="" class="horizontal-form" name="seeker-profile" id="seeker-profile">
                                                       <h3> <div class="form-body">
                                                            <div class="caption">
                                                        <i class="icon-equalizer font-red-sunglo"></i>
                                                        <span class="caption-subject font-red-sunglo bold uppercase">Seeker Profile</span>
                                                        <span class="caption-helper"></span>
                                                    </div></h3>
                                                    <div class="row">
                                                                <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label">First Name<span style="color: red;">*</span></label>
                                                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter First Name">
                                                        <span id="errfn" class="text-danger"></span>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Middle Name<span style="color: red;">*</span></label>
                                                        <input type="text" id="middlename" name="middlename" class="form-control" placeholder="Enter Middle Name">
                                                        <span id="errmn" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                             <div class="row">
                                                                <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Last Name<span style="color: red;">*</span></label>
                                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter Last Name">
                                                        <span id="errln" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Email
                                                        <span style="color: red;">*</span></label>
                                                        <input type="text" id="email" name="email" class="form-control" placeholder="abc@gmail.com">
                                                        <span id="erremail" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                    <div class="row">
                                                                <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Mobile No<span style="color: red;">*</span></label>
                                                        <input type="text" id="mobile" class="form-control">
                                                        <span id="errmobile" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Address<span style="color: red;">*</span></label>
                                                        <input type="text" id="address" name="address" class="form-control">
                                                        <span id="erraddress" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                   
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                        <label class="control-label"> </label>
                                                     <input type="radio" id="experience" name="seeker" value="Experience">Experience
                                                    <input type="radio" id="fresher" name="seeker" value="Fresher">Fresher
                                                                    </div>
                                                                </div>
                                                
                                                            </div>
                                                            <!--/row-->
                                                     <div class="form-actions left">
                                                        <button type="button" class="btn blue"  onclick="adddata()">Save</button> 
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
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/seeker-profile.js?<?php echo rand(0,9999);?>"></script>
                                                
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