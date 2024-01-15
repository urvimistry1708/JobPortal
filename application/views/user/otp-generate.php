<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, height=device-height,
                                   initial-scale=1.0, maximum-scale=1.0,
                                   target-densityDpi=device-dpi">
    <link rel="alternate" type="application/rss+xml" title="Jobs" href="http://flow.mysmartjobboard.com/rss/">

    <title>Password Recovery | SmartJobBoard</title>

    <link href="https://cdn.smartjobboard.com/5.0.36/templates/FlowDND/assets/styles.css" rel="stylesheet">
    <link href="http://flow.mysmartjobboard.com/templates/FlowDND/assets/style/styles.css?v=1556079925.6872" rel="stylesheet" id="styles">

    <link rel="icon" href="http://flow.mysmartjobboard.com/templates/FlowDND/assets/images/favicon.ico" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700" rel="stylesheet" type="text/css">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="SmartJobBoard" />
<meta property="og:url" content="http://flow.mysmartjobboard.com/password-recovery/" />
<meta property="og:title" content="Password Recovery | SmartJobBoard" />
<meta property="og:description" content="" />
<meta property="og:image" content="http://flow.mysmartjobboard.com/templates/FlowDND/assets/images/logo.svg" />
            <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110320771-1"></script>
        
    <style type="text/css"></style>
    
</head>
<body class="body__inner">
    <?php  $this->load->view('user/templates/useraccount-header');?>

    <div id="loading"></div>

    <div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="message-modal-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title" id="message-modal-label">Modal title</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="flash-messages">
                        
    </div>

    <div class="page-row page-row-expanded" style="
 background-image: url('<?php echo base_url(); ?>user_assets/img/imgreg.png');background-size: cover;">
                <div class="container container--small   ">
                                        
                        <form method="post" action="" class="form form__modal password-recovery">
    <h1 class="title__primary title__primary-small title__centered title__bordered">Enter OTP here</h1>
    <div class="form-group text-center password-recovery__description">
       
    </div>
     <div class="form-group">
        <?php 
        if(isset($_GET['nme']))
        {
            $nme=$_GET['nme'];
        }
        ?>
        <input type="text" name="nme" id="nme" value="<?php echo $nme; ?>" hidden>
                                <input type="text" name="otpsent" id="otpsent" value="<?php echo $_SESSION['otp']; ?>" hidden>
                                <input type="text" name="otp" id="otp" class="form-control"  placeholder="Enter OTP">
                                <span class="text-danger" id="err_otp"></span>
                            </div>
                            <div class="form-group">
                                <input type="button" name="next" value="Next" class="btn btn__orange btn__bold"  onclick="otpgenerate()">
                            </div>
   
</form>
                    
                                    </div>
            </div>
            
           

    <div class="page-row hidden-print">
    
     <?php  $this->load->view('user/templates/useraccount-footer');?>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js?<?php echo rand(0,9999);?>"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>user_assets/js/user/login.js?<?php echo rand(0,9999);?>"></script>

    </div>




</div>
 
    <script src="https://cdn.smartjobboard.com/5.0.36/templates/FlowDND/assets/scripts.js"></script>
    <script>
        document.addEventListener("touchstart", function() { }, false);

        var langSettings = {
            thousands_separator : ',',
            decimal_separator : '.',
            decimals : '2',
            currencySign: '$',
            showCurrencySign: 1,
            currencySignLocation: '0'
        };
    </script>

    <script language="JavaScript" type="text/javascript" src="http://flow.mysmartjobboard.com/system/ext/jquery/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
            <script type="text/javascript" src="http://flow.mysmartjobboard.com/system/ext/jquery/bootstrap-datepicker/i18n/bootstrap-datepicker.en.min.js?v=5.0.36"></script>
    
    <script language="javascript" type="text/javascript">

        // Set global javascript value for page
        window.SJB_GlobalSiteUrl = 'http://flow.mysmartjobboard.com';
        window.SJB_UserSiteUrl   = 'http://flow.mysmartjobboard.com';

    </script>

     <script src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnLoad&render=explicit" async defer></script>                <script>
                    var recaptchaLoaded = false;
                    function recaptchaOnLoad() {
                        if (typeof captchaCompleted != 'undefined') {
                            return;
                        }
                        recaptchaLoaded = true;
                        $('.with-captcha').each(function() {
                            var form = $(this);
                            if (form.data('captcha-inited')) {
                                return true;
                            }
                            form.data('captcha-inited', true);
                            var recaptcha = $('<div class="recaptcha-container form-group"></div>');
                            form.find('input[type="submit"]')
                                .after(recaptcha);
                            recaptcha.uniqueId();
                            var id = grecaptcha.render(recaptcha.attr('id'), {
                                'sitekey': '6LcKwyAUAAAAANWAgSImC3RWxGe4Dz0A2qeuwwl3',
                                'size': 'invisible',
                                'badge': 'inline',
                                'callback': function() {
                                    form.data('captcha-triggered', true);
                                    form.submit();
                                }
                            });
                    
                            form.submit(function(e) {
                                if (!$(this).data('captcha-triggered')) {
                                    e.preventDefault();
                                    e.stopImmediatePropagation();
                                    grecaptcha.execute(id);
                                }
                            });
                    
                            var handlers = $._data(this, 'events')['submit'];
                            // take out the handler we just inserted from the end
                            var handler = handlers.pop();
                            // move it at the beginning
                            handlers.splice(0, 0, handler);
                            
                            $('.with-captcha :submit').each(function() {
                                if ($(this).prop('disabled') && $(this).data('pre-captcha-disabled')) {
                                    $(this).prop('disabled', false);
                                }
                            });
                        });
                    }
                    
                    function newRecaptchaForm() {
                        if (recaptchaLoaded) { // preventing node inserted before recaptcha load
                            recaptchaOnLoad();
                        }
                    }
                    document.documentElement.addEventListener('DOMNodeInserted', newRecaptchaForm, false);
                </script> 
    <script>
        $('.navbar__link').on('click', function(e) {
            if ($(this).attr('href') == '' || $(this).attr('href') == 'http://' ||
                    $(this).attr('href') == 'https://' || $(this).attr('href') == '#') {
                e.preventDefault();
            }
        });

        $('.dropdown > a').on('touchstart', function (e) {
            var link = $(this);

            if (link.hasClass('hover') || $(document).width() < 993) {
                link.addClass('hover');
                return true;
            } else {
                link.addClass('hover');
                $('.dropdown > a').not(this).removeClass('hover');
                e.preventDefault();
                return false;
            }
        });

        $(document).on('click', function (e) {
            var dropdown = $('.navbar__link.hover').closest('.navbar__item');

            if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0) {
                dropdown.find('.navbar__link.hover').removeClass('hover');
            }
        });
    </script>
 

    

    <script>
        function message(title, content) {
            var modal = $('#message-modal');
            modal.find('.modal-title').html(title);
            modal.find('.modal-body').html(content);
            modal.modal('show');
        }

        $(document).ready(function() {
            $('table').each(function() {
                $(this).wrap('<div class="table-responsive"/>')
            });
        });
    </script>
</body>
</html>