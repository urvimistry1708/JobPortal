<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/neer/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2019 09:58:43 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PTNPV7L');</script>
    <!-- End Google Tag Manager -->
    <title>Neer - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTNPV7L"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>
<?php $this->load->view('user/templates/useraccount-header'); ?>

<!-- Contact section start -->
<div class="page-row page-row-expanded"  style="
 background-image: url('<?php echo base_url(); ?>user_assets/img/imgreg.png');background-size: cover;">
                <div class="container container--small   ">
                                        
                        <form method="post" action="" class="form form__modal password-recovery">
    <h1 class="title__primary title__primary-small title__centered title__bordered">Reset Your Password</h1>
  
    <div class="form-group">
   <?php 
        if(isset($_GET['nme']))
        {
            $nme=$_GET['nme'];
        }
        ?>
        <input type="text" name="nme" id="nme" value="<?php echo $nme; ?>" hidden>
        <input type="password" name="customer_password" id="customer_password" class="form-control"  placeholder="Enter Password">
                                <span class="text-danger" id="err_customer_password"></span>
    </div>
     <div class="form-group">
       <input type="password" name="customer_confirm_password" id="customer_confirm_password" class="form-control" placeholder="Enter Confirm Password">
                                <span class="text-danger" id="err_customer_confirm_password"></span>
    </div>
    <div class="form-group form-group__btns text-center">
        <input type="button" onclick="resetpassword()" name="sendemail" value="Reset my password" class="btn btn__orange btn__bold" />
    </div>
</form>
                    
                                    </div>
            </div>
            <!-- Contact section end -->
<?php $this->load->view('user/templates/useraccount-footer'); ?>

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://themevessel-item.s3-website-us-east-1.amazonaws.com/neer/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

 <script src=  "<?php  echo base_url();?>assets/js/jquery-3.3.1.min.js?<?php echo rand(0,9999);?>"></script>
  <script type="text/javascript" src="<?php  echo base_url();?>user_assets/js/user/login.js?<?php echo rand(0,9999);?>"></script> 

</body>

<!-- Mirrored from themevessel-item.s3-website-us-east-1.amazonaws.com/neer/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2019 09:58:43 GMT -->
</html>