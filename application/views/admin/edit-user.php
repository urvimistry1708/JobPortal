
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
                                                 
                                                </div>
                                                <div class="portlet-body form">
                                                   
                                                                    <div class="portlet light bg-inverse">
                                                <div class="portlet-title">
                                                
                                                   
                                                </div>
                                                <div class="portlet-body form">
                                                    <!-- BEGIN FORM-->
                                                    <form  class="horizontal-form"  id="user_account" name="user_account" method="POST" enctype="multipart/form-data">
                                                        <?php
                                                          foreach($userlist as $list)
                                                          {
                                                        ?>
                                                        <div class="form-body">
                                                            <h3 class="form-section"> <div class="form-body">
                                                            <div class="caption">
                                                        <i class="icon-equalizer font-red-sunglo"></i>
                                                        <span class="caption-subject font-red-sunglo bold uppercase">User account Details</span>
                                                        <span class="caption-helper"></span>
                                                    </div></h3>
                                                            <div class="row">
                                                                
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div >
                                                                        <label class="control-label">User Name</label>
                                                                        <input type="text" name="user_id" id="user_id" value="<?php echo $list['user_id'] ;?>" hidden>
                                                                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter user name" value="<?php echo $list['user_name'] ;?>"><span id="erruname" class="text-danger"></span>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                             <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">User Image</label>
                                                                        <input type="file" id="user_image" name="user_image" class="" placeholder="">
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Password</label>
                                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" value="<?php echo $list['password'] ;?>">
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div >
                                                                        <label class="control-label">Email Id</label>
                                                                        <input type="email" id="email_id" name="email_id" class="form-control" placeholder="Enter email id" value="<?php echo $list['email_id'] ;?>">
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                             <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div >
                                                                        <label class="control-label">Contact</label>
                                                                        <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter contact" value="<?php echo $list['contact'] ;?>">
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Date of Birth</label>
                                                                        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo $list['date_of_birth'] ;?>"> </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label"> Role</label>
                                                                      
                                                                        <select id="jobrole" id="role" name="role" class="form-control" tabindex="1">
                                                                    
                                                                    <option><?php echo $list['role'] ;?></option>
                                                                    <option value="0">Choose a  role</option>
                                                                    <option value="Admin">Admin</option>
                                                                    <option value="Other">Other</option>
                                                                    </select>
                                                                    <span id="errjobr" class="text-danger"></span>
                                                                    </div>
                                                                </div>  
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Gender</label>
                                                                        <div class="radio-list">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="radio-inline">
                                                                                <input type="radio" name="gender" id="male" value="Male" <?php if ($list['gender'] == 'Male' ) echo 'checked' ; ?>> Male </label>
                                                                            <label class="radio-inline">
                                                                                <input type="radio" name="gender" id="female" value="Female" <?php if ($list['gender'] == 'Female' ) echo 'checked' ; ?>> Female</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div >
                                                                        <label class="control-label">SMS Notification Active &nbsp;&nbsp;&nbsp;<input
                                                                        type="checkbox" name="smsnotification" id="smsnotification" value="1" <?php if ($list['sms_notification_active'] == '1' ) echo 'checked' ; ?>></label>&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;
                                                                        <label class="control-label">Email Notification Active &nbsp;&nbsp;&nbsp;<input
                                                                        type="checkbox" name="emailnotification" id="emailnotification" value="1" <?php if ($list['email_notification_active'] == '1' ) echo 'checked' ; ?> ></label>
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                              <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Registration Date</label>
                                                                        <input type="date" id="registration_date" name="registration_date" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo $list['registration_date'] ;?>"> </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="form-section">Address</h3>
                                      <div class="row">                      
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="control-label">Job Country<span style="color: red;">*</span></label>
                                    <select class="form-control" id="country_id" name="country_id" onchange="getState(<?php echo $list['state_id']; ?>)">
                                    <option value="">Choose job country</option>
                                        
                                        <?php 
                                        foreach($countryList as $tagData){ 
                                        ?>
                                        <option value="<?php echo $tagData['country_id']; ?>" <?php 
                                        if($list['country_id']==$tagData['country_id'])
                                        {
                                            echo "selected";
                                        }
                                        ?>><?php echo $tagData['country_name']; ?></option>
                                    <?php } ?>
                                    </select>
                                    <span id="errjcountry" class="text-danger"></span>
                                    </div>
                                </div>
                                                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="control-label">Job State<span style="color: red;">*</span></label>
                                    <select class="form-control" id="state_id" name="state_id" onchange="getCity(<?php echo $list['city_id'] ;?>)">
                                    <option value="">Choose job state</option>
                                 
                                    </select>
                                    <span id="errjstate"  class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                                                            
                                                            <div class="row">
                                                   <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="control-label">Job City<span style="color: red;">*</span></label>
                                    <select class="form-control" id="city_id" name="city_id">
                                    <option value="">Choose job city</option>
                                       
                                    </select>
                                    <span id="errjcity" class="text-danger"></span>
                                </div>
                            </div>
                             <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Street</label>
                                                                        <input type="text" name="street" id="street" class="form-control" placeholder="Enter street" value="<?php echo $list['street'] ;?>">
                                                                        <span class="help-block">  </span>
                                                                    </div>
                                                                </div>
                                                              
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Pin Code</label>
                                                                        <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $list['pincode'] ;?>"> </div>
                                                                </div>
                                                               
                                                                <!--/span-->
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                        <div class="form-actions left">
                                                            <input type="button" onclick="updatedata()" value="Update" class="btn blue" class="fa fa-check">
                                                            
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
         <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/useraccount.js?<?php echo rand(0,9999);?>"></script>
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