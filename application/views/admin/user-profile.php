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
                                                    <form class="horizontal-form" action="userprofile/view" name="userprofile" id="userprofile" method="POST" enctype="multipart/form-data">
                                                        <div class="form-body">
                                                            <h3 class="form-section"> <div class="form-body">
                                                            <div class="caption">
                                                        <i class="icon-equalizer font-red-sunglo"></i>
                                                        <span class="caption-subject font-red-sunglo bold uppercase">User profile Details</span>
                                                        <span class="caption-helper"></span>
                                                    </div></h3>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Company Name</label>
                                                                        <input type="text" id="companyname" name="companyname" class="form-control" placeholder="Enter company name">
                                                                        <span id="errcname" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div >
                                                                        <label class="control-label">Joining Year</label>
                                                                        <select class="form-control" tabindex="1" id="joiningyear" name="joiningyear">
                                                                            <option value="0" >Year</option>

                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010
                                                                            </option>
                                                                            <option value="2011">2011</option> 
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>  
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>       
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>   
                                                                        </select>
                                                                        <span class="text-danger" id="errjy"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                             <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div >
                                                                        <label class="control-label">Resign Year</label>
                                                                        <select class="form-control" tabindex="1" id="resignyear" name="resignyear">
                                                                            <option value="0">Year</option>

                                                                       <option value="1991">1991</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010
                                                                            </option>
                                                                            <option value="2011">2011</option> 
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>  
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>       
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>   
                                                                        </select>
                                                                        <span class="text-danger" id="errry"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                       <label class="control-label">Joining Month</label>
                                                                        <select class="form-control" tabindex="1" id="joiningmonth" name="joiningmonth">
                                                                            <option value="0">Month</option>

                                                                       <option value="January">January</option>
                                                                            <option value="February">February</option>
                                                                            <option value="March">March</option>
                                                                            <option value="April">April</option>
                                                                            <option value="May">May</option>
                                                                            <option value="June">June</option>
                                                                            <option value="July">July</option>
                                                                            <option value="August">August</option>
                                                                            <option value="September">September</option>
                                                                            <option value="October">October</option>
                                                                            <option value="November">November</option>
                                                                            <option value="December">December</option>
                                                                        </select>
                                                                        <span id="errjm"
                                                                        class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div >
                                                                         <label class="control-label">Resign Month</label>
                                                                        <select class="form-control" tabindex="1" id="resignmonth" name="resignmonth">
                                                                            <option value="0">Month</option>

                                                                       <option value="January">January</option>
                                                                            <option value="February">February</option>
                                                                            <option value="March">March</option>
                                                                            <option value="April">April</option>
                                                                            <option value="May">May</option>
                                                                            <option value="June">June</option>
                                                                            <option value="July">July</option>
                                                                            <option value="August">August</option>
                                                                            <option value="September">September</option>
                                                                            <option value="October">October</option>
                                                                            <option value="November">November</option>
                                                                            <option value="December">December</option>
                                                                        </select>
                                                                        <span id="errrm" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                
                                                         <div class="col-md-6">
                                                             <div class="form-group">
                                                             <label class="control-label">User Image</label>
                                                                     <input type="file" id="profile_image" name="profile_image" size="20" class="">
                                                                             <span class="help-block">  </span>
                                                             </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Job Role</label>
                                                                      
                                                                        <select id="jobrole" name="jobrole" class="form-control" tabindex="1">
                                                                    <option value="0">Choose a job role</option>
                                                                    <?php foreach($this->userprofle_model->jobrole() as $tagData): ?>
                                                                    <option value="<?php echo $tagData->job_role_id; ?>"><?php echo $tagData->job_role_title; ?></option><?php endforeach; ?>
                                                                    </select>
                                                                    <span id="errjobr" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Designation</label>

                                                                        <select id="designation" name="designation" class="form-control" tabindex="1">
                                                                    <option value="0">Choose designation</option>
                                                                    <?php foreach($this->userprofle_model->designation() as $tagData): ?>
                                                                    <option><?php echo $tagData->designation; ?></option><?php endforeach; ?>
                                                                    </select>
                                                                    <span id="errdesi" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->
                                                             <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Current Salary</label>
                                                                        <select class="form-control" tabindex="1" id="currentsal" name="currentsal">

                                                                            <option value="0">Choose a Current Salary</option>
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
                                                                        <span id="errcsal" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div >
                                                                        <label class="control-label">Experience</label>
                                                                        <select class="form-control" tabindex="1" id="experience" name="experience">
                                                                            <option value="0">Experience(Year)</option>

                                                                       <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="10 above">10 above</option>
                                                                        </select>
                                                                        <span id="errexp" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                
                                                                <!--/span-->
                                                            </div>
                                                         <div class="form-actions left">
                                                        <!--<input type="button" class="btn blue" value="Save" onclick="adddata()">-->
                                                  <input type="submit" class="btn blue" value="Save">
                                                     <button type="submit" class="btn default">Cancel</button>
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
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/userprofile.js?<?php echo rand(0,9999);?>"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
       <!--  <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script> -->
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